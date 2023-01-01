<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Ngen It Admin',
                'email' => 'admin@ngenit.com',
                'password' => Hash::make('ngenitadmin'),
                'role' => 'admin',
                'status' => 'active',

            ],
              //Sales
            [
                'name' => 'Ngen It Sales',
                'email' => 'sales@ngenit.com',
                'password' => Hash::make('111'),
                'role' => 'sales',
                'status' => 'active',

            ],
              //User OR Customer
            [
                'name' => 'Ngen It Client',
                'email' => 'client@ngenit.com',
                'password' => Hash::make('111'),
                'role' => 'client',
                'status' => 'active',

            ],
        ]);
    }
}
