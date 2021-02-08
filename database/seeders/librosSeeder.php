<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        'autor' => 'Xavi Oliver',
        'titulo' => 'El pais de las maravillas',
        'editorial' => 'Santillana',
        'sinopsis' => 'lorem ipsum',
        'precio' => '5',
        'imagen_portada' => 'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg',
        
        ]);
        DB::table('books')->insert([
            'autor' => 'Xavi Oliver',
            'titulo' => '60 Sombras y 50 Mentiras',
            'editorial' => 'Santillana',
            'sinopsis' => 'lorem ipsum',
            'precio' => '5',
            'imagen_portada' => 'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg',
            
        ]);
        DB::table('books')->insert([
            'autor' => 'Xavi Oliver',
            'titulo' => '123',
            'editorial' => 'Santillana',
            'sinopsis' => 'lorem ipsum',
            'precio' => '5',
            'imagen_portada' => 'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg',
            
        ]);
        DB::table('books')->insert([
            'autor' => 'Xavi Oliver',
            'titulo' => 'El pais de las maravillas 2',
            'editorial' => 'Santillana',
            'sinopsis' => 'lorem ipsum',
            'precio' => '5',
            'imagen_portada' => 'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg',
            
        ]);
        DB::table('books')->insert([
            'autor' => 'Xavi Oliver',
            'titulo' => 'Los Juegos del hambre VI',
            'editorial' => 'Santillana',
            'sinopsis' => 'lorem ipsum',
            'precio' => '5',
            'imagen_portada' => 'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg',
            
        ]);
        DB::table('books')->insert([
            'autor' => 'Xavi Oliver',
            'titulo' => 'Don Jose, Historias de terror',
            'editorial' => 'Santillana',
            'sinopsis' => 'lorem ipsum',
            'precio' => '5',
            'imagen_portada' => 'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg',
            
        ]);
    }
}
