<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
       
            [
                'id' => 1000,
                'name' => 'Abasas',
                'email' => 'admin@abasas.tech',
                'password' => Hash::make('1234'),
            ],
            [
                'id' => 1001,
                'name' => 'Admin',
                'email' => 'pureorigins@gmail.com',
                'password' => Hash::make('admin1234'),
            ],
        ]);
    }
}
