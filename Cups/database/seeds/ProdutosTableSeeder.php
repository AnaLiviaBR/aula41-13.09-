<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            [
                'nome' => 'Programo todo dia',
                'id_categoria' => 4,
                'preco' => 21.2,
                'quantidade' => 99
            ]
        );
    }
}
