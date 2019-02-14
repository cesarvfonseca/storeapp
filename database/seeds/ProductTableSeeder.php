<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Products;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Camisa 1',
                'slug' => 'camisa-1',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Hay muchas',
                'price' => 325.50,
                'image' => 'https://images.pexels.com/photos/428340/pexels-photo-428340.jpeg?cs=srgb&dl=adult-dark-facial-expression-428340.jpg&fm=jpg',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 1
            ],
            [
                'name' => 'Camisa 2',
                'slug' => 'camisa-2',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Hay muchas',
                'price' => 412.50,
                'image' => 'https://images.pexels.com/photos/1408183/pexels-photo-1408183.jpeg?cs=srgb&dl=beautiful-beauty-belt-1408183.jpg&fm=jpg',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 1
            ],
            [
                'name' => 'Pantalon 1',
                'slug' => 'pantalon-1',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Hay muchas',
                'price' => 387.00,
                'image' => 'https://images.pexels.com/photos/1649896/pexels-photo-1649896.jpeg?cs=srgb&dl=casual-fashion-model-1649896.jpg&fm=jpg',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 2
            ],
            [
                'name' => 'Pantalon 2',
                'slug' => 'pantalon-2',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Hay muchas',
                'price' => 420.00,
                'image' => 'https://images.pexels.com/photos/818992/pexels-photo-818992.jpeg?cs=srgb&dl=beauty-casual-face-818992.jpg&fm=jpg',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 2
            ]
        );
        Products::insert($data);
    }
}