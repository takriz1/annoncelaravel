<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('products')->insert(

            [
                [

                    'name' => 'RockRider',
                    'description' => 'RockRider',
                    'price' => 200,
                    'qtt' => 1,
                    'image' => 'rockrider.jpg',
                    'category_id' => 1,
                    'user_id' => 1

                ],
                [

                    'name' => 'MOMABIKES',
                    'description' => 'MOMABIKES',
                    'price' => 200,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ]
            ]

        );
    }
}
