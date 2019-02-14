<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryTableSeeder extends Seeder
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
                'name' => 'Super Heroes',
                'slug' => 'super-heroes',
                'description' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
                'color' => '#440022'
            ],
            [
                'name' => 'Geek',
                'slug' => 'geek',
                'description' => 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño.',
                'color' => '#445500'
            ]
        );
        Category::insert($data);
    }
}