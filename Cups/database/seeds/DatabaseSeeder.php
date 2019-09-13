<?php

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

        //Aqui estou mandando executar o seeder de Categorias
         $this->call(UsersTableSeeder::class);
    }
}
