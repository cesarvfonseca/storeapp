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
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 325.50,
                'image' => 'https://images.pexels.com/photos/1261422/pexels-photo-1261422.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 1
            ],
            [
                'name' => 'Camisa 2',
                'slug' => 'camisa-2',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
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
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
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
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 420.00,
                'image' => 'https://images.pexels.com/photos/818992/pexels-photo-818992.jpeg?cs=srgb&dl=beauty-casual-face-818992.jpg&fm=jpg',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 2
            ],
            [
                'name' => 'Jeans',
                'slug' => 'jeans-a',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 320.00,
                'image' => 'https://images.pexels.com/photos/1485031/pexels-photo-1485031.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 1
            ],
            [
                'name' => 'Jeans 2',
                'slug' => 'jeans-b',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 450.00,
                'image' => 'https://images.pexels.com/photos/1661421/pexels-photo-1661421.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 1
            ],
            [
                'name' => 'Tenis 1',
                'slug' => 'tenis-1',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 350.00,
                'image' => 'https://images.pexels.com/photos/1661470/pexels-photo-1661470.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 2
            ],
            [
                'name' => 'Tenis 2',
                'slug' => 'tenis-2',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 420.00,
                'image' => 'https://images.pexels.com/photos/1668034/pexels-photo-1668034.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 2
            ],
            [
                'name' => 'Playera 3',
                'slug' => 'playera-3',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 380.00,
                'image' => 'https://images.pexels.com/photos/1188748/pexels-photo-1188748.jpeg?cs=srgb&dl=adult-cute-fashion-1188748.jpg&fm=jpg',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 2
            ],
            [
                'name' => 'Playera 4',
                'slug' => 'playera-4',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe mollitia quae dolor? Iure sapiente accusamus, provident consequatur dicta suscipit aperiam impedit repellendus id incidunt aut tempora accusantium aliquam voluptatem esse.',
                'price' => 320.00,
                'image' => 'https://images.pexels.com/photos/1484808/pexels-photo-1484808.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260',
                'visible' => 1,
                'updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'category_id' => 2
            ]
        );
        Products::insert($data);
    }
}