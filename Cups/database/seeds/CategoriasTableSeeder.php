<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nome' => 'Românticas']);

        DB::table('categorias')->insert(['nome' => 'Cultuta POP']);

        DB::table('categorias')->insert(['nome' => 'Família']);

        DB::table('categorias')->insert(['nome' => 'Programação']);
    }
    }
}
