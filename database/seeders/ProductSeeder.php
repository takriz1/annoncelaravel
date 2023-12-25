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
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset ",
                    'price' => 200,
                    'qtt' => 1,
                    'image' => 'rockrider.jpg',
                    'category_id' => 1,
                    'user_id' => 1

                ],
                [

                    'name' => 'MOMABIKES',
                    'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page edi",
                    'price' => 500,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 2',
                    'description' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtab",
                    'price' => 600,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 3',
                    'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, ma",
                    'price' => 800,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 4',
                    'description' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham",
                    'price' => 550,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 5',
                    'description' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham",
                    'price' => 600,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 6',
                    'description' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham",
                    'price' => 650,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 7',
                    'description' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham",
                    'price' => 700,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 8',
                    'description' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham",
                    'price' => 750,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 9',
                    'description' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham",
                    'price' => 800,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ],
                [

                    'name' => 'MOMABIKES 10',
                    'description' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham",
                    'price' => 850,
                    'qtt' => 1,
                    'image' => 'MOMABIKES.jpg',
                    'category_id' => 1,
                    'user_id' => 1
                ]
            ]

        );
    }
}
