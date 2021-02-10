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

        DB::table('images')->insert([
       
            [
                'url' => 'images/1612800291.full.LogisticsShip.jpg',      //id = 1
                'thumbnail' => 'images/1612800291.small.LogisticsShip.jpg',
            ],
            [
                'url' => 'images/1612800369.full.LogisticsTrucks.jpg',      //id = 2
                'thumbnail' => 'images/1612800369.small.LogisticsTrucks.jpg',
            ],
            [
                'url' => 'images/1612800548.full.SewingMachine.jpg',         //id = 3
                'thumbnail' => 'images/1612800548.small.SewingMachine.jpg',
            ],
            [
                'url' => 'images/1612800599.full.ThreadsBundle.jpg',        //id = 4
                'thumbnail' => 'images/1612800599.small.ThreadsBundle.jpg',
            ],
            
            [
                'url' => 'images/logo.jpg',        //id = 5
                'thumbnail' => 'images/logo.jpg',
            ],

        ]);
        

        DB::table('banners')->insert([
       
            [
                'title' => 'COVID 19 IMPACT',
                'description' => "“Our industry has come to a halt and with closures in the retail sectors
                    manufacturing has been hit due to order cancellations and plant closures.” 
                    “We have sprung back into operation with fresh innovations and vigour as we
                    steam ahead with our manufacturing without the lag",
                'image_id' => 3,
            ],
            [
                'title' => 'Our Presence @PureLondon',
                'description' => 'Come and join the Fashion Together Event hosted by Hyve in London 
                         Our designers have crafted some great pieces for the upcoming season 21/22',
                'image_id' => 4,
            ],
            [
                'title' => 'happier skin with hemp',
                'description' => "Prevent aging before it stars with nourishing, natural  hemp
                seed oil and pomegranate probiotieferment",
                'image_id' => 1,
            ],
            [
                'title' => 'Pure Origins',
                'description' => 'Why risk travelling abroad when we are by your side offering you robust end-to-end service at your doorstep. Our London office is equipped with a design and merchandising studio. Our experienced team will assist your buyers at every step to ensure your requirements and satisfaction are fully met.',
                'image_id' => 2,
            ],
        ]);

        DB::table('gallery_categories')->insert([
            [
                'name' => 'category 1',
                'description' => 'description 1'
            ],
            [
                'name' => 'category 2',
                'description' => 'description 1'
            ],
            [
                'name' => 'category 2',
                'description' => 'description 1'
            ],
            [
                'name' => 'category 3',
                'description' => 'description 1'
            ],
            [
                'name' => 'category 3',
                'description' => 'description 1'
            ],
            [
                'name' => 'category 4',
                'description' => 'description 4'
            ],
        ]);
        DB::table('settings')->insert([

            [
                'name' => 'Pure Origins',
                'slogan' => 'Safins Group',
                'phone' => '01555555555',
                'email' => 'contact@pureorins.tech',
                'image_id' => 5,
            ]
        ]);
    }
}
