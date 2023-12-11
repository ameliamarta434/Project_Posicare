<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Posicare',
            'username' => 'Admin Posicare',
            'level' => 'admin',
            'email' => 'posicare@admin.com',
            'password' => Hash::make('adminposicare123'),
        ]);
    }
}
