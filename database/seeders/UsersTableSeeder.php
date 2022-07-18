<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
//use Illuminate\Database\Seeder;

//namespace Database\Seeders;

//use Illuminate\Database\Seeder;
use App\Models\admin;
//use App\Models\User;
//use DB;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::insert([
        //     'name'=> 'Admin',
        //     'email'=> 'admin@admin.com',
        //     'password'=>bcrypt('password'),
        //     'email_verified_at' => now(),
        //     'role'=>1
        // ]);
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('password'),
        //     'role' => 1
        // ]);

        DB::table('users')->insert([
            'name'=> 'Admin',
            'email'=> 'admin@admin.com',
            'password'=>bcrypt('password'),
            'email_verified_at' => now(),
            'role'=>'1'
        ]);
    }
}
