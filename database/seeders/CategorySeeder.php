<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->insert(

            [
                [

                    'libelle_c' => 'Bicycle',
                    'description_c' => 'Bicycle',
                    'image_c' => 'img-1.png',


                ],
                [

                    'libelle_c' => 'Furniture',
                    'description_c' => 'Furniture',
                    'image_c' => 'img-2.png',


                ]
            ]

        );
    }
}
