<?php

namespace Database\Seeders;

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

/**
 *
 *  Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_c');
            $table->text('description_c');
            $table->string('image_c');
            $table->timestamps();
        });
 */
$categoriesToInsert = [
    ['libelle_c'=>'Bicycle','description_c'=>'Bicycle', 'image_c' => 'http://127.0.0.1:8000/mainassets/img/category/img-1.png'],
    ['libelle_c'=>'Furniture','description_c'=>'Furniture', 'image_c' => 'http://127.0.0.1:8000/mainassets/img/category/img-2.png'],
    ['libelle_c'=>'Laptop','description_c'=>'admin@techvblogs.com', 'image_c' => ''],
    ['libelle_c'=>'Admin','description_c'=>'admin@techvblogs.com', 'image_c' => ''],
    ['libelle_c'=>'Admin','description_c'=>'admin@techvblogs.com', 'image_c' => ''],
];
        //
        DB::table('categories')->insert([

            'libelle_c' => 'Admin',
            'description_c' => 'Admin',
            'image_c' => 'Admin',


        ]);
    }
}
