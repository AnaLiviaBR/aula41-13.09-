<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Aqui vamos fazer a tabela com suas colunas
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('quantidade');
            $table->decimal('preco', 5,2);
            $table->unsignedBigInteger('id_categoria');          
            $table->timestamps();     //Cria as colunas created_at e updated_at. Ou seja, quando executarmos o SAVE do modelo, ela vai atualizar na tabela e preencher as colunas com a data e a hora que está sendo executada esse save.
       
            //Estabelecendo a coluna id_categoria como FK
            $table->foreign('id_categoria')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
