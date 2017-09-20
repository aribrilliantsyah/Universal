<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat Role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //membuat Role penulis
        $penulisRole = new Role();
        $penulisRole->name = "penulis";
        $penulisRole->display_name = "Penulis";
        $penulisRole->save();

        //sample admin
        $admin = new User();
        $admin->name = "Sample Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //sample penulis
        $penulis = new User();
        $penulis->name = "Sample Penulis";
        $penulis->email = "penulis@gmail.com";
        $penulis->password = bcrypt('rahasia');
        $penulis->save();
        $penulis->attachRole($penulisRole);




    }
}
