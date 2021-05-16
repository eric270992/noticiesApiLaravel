<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Imatge;
use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         //Imatge::factory(10)->create();

         Autor::factory(10)->create();
         Noticia::factory(10)->create();
    }
}
