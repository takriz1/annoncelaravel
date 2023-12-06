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


                ],
                [

                    'libelle_c' => 'Laptop',
                    'description_c' => 'Laptop',
                    'image_c' => 'img-3.png',


                ],
                [

                    'libelle_c' => 'Electronic',
                    'description_c' => 'Electronic',
                    'image_c' => 'img-4.png',


                ],
                [

                    'libelle_c' => 'Toys',
                    'description_c' => 'Toys',
                    'image_c' => 'img-5.png',


                ],
                [

                    'libelle_c' => 'Cloths',
                    'description_c' => 'Cloths',
                    'image_c' => 'img-6.png',


                ]
            ]

        );
    }
}
