<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use Alert;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    { 
    if (Laratrust::hasRole('admin')) return $this->AdminDashboard(); 
    if (Laratrust::hasRole('penulis')) return $this->PenulisDashboard(); 
    return view('home'); 
    }

    protected function AdminDashboard() 
    { 
        Alert::basic(Auth::user()->name,'Selamat Datang Kembali');
        return view('dashboard.admin');
    }
    protected function PenulisDashboard()
    { 
        Alert::basic(Auth::user()->name,'Selamat Datang Kembali');
        return view('dashboard.penulis'); 
    }
}
