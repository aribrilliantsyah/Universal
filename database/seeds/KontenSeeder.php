<?php

use Illuminate\Database\Seeder;
use App\konten;
class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $konten = new konten();
        $konten->logo = "logo.png";
        $konten->name = "example";
        $konten->no_tlp ="+62-478";
        $konten->email = "info@example";
        $konten->alamat = "jl.example";
        $konten->save();
    }
}
