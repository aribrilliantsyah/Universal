<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\konten;
use Alert;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $konten = konten::all();
        return view('interface.backend.konten.index', compact('konten'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $konten= konten::find($id);
        return view('interface.backend.konten.edit',compact('konten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'logo' => 'image:max2048',
            'name' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_tlp' => 'required'
        ]);
        $konten = konten::find($id);
        $konten->update($request->all());

        if($request->hasFile('logo'))
        {
            $filename=null;
            $uploaded_lokasi=$request->file('logo');
            $extension=$uploaded_lokasi->getClientOriginalExtension();
            $filename='logo.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_lokasi->move($destinationPath, $filename);
            if($konten->logo)
            {
                $old_lokasi=$konten->logo;
                $filepath=public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$konten->logo;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $konten->logo=$filename;
            $konten->save();
        }
        Alert::success('Mengubah Data', 'Berhasil')->autoclose(2000);
        return redirect('admin/konten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
