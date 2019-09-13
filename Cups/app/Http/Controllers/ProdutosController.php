<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){

        // Carregar os produtos da base de dados
        $produtos = Produto::paginate(5);

        // Retortar a view com os produtos levantados
        return view('produtos.index', compact('produtos'));

    }

    public function show($id){

        // Carregar os produtos da base de dados
        $produto = Produto::find($id);

        // Retortar a view com os produtos levantados
        return view('produtos.show', compact('produto'));

    }

    public function edit($id){

        // Carregar os produtos da base de dados
        $produto = Produto::find($id);

        //Carregar as categorias do BD
        $categorias = Categoria::all();

        // Retortar a view com os produtos levantados
        return view('produtos.edit', compact('produto','categorias'));
    }

    public function update($id){

        //Validar o request (fazemos isso no request e não no input pq devemos preparar o campo antes de receber o input, e não depois!)
        request()->validate(
            [
                'nome' => 'required',  //Se a validação falhar em algum campo, ela já retorna para a mesma página sem quebrar o código. Mas ainda não avisa ao usuário qual foi o problema (ex.:deixar campo em vermelho)
                'categoria' => 'required',
                'preco' => 'required|gte:0|lt:999.99',
                'quantidade' => 'required|gt:0|max:1000'

            ]
            );

        // Carregar o produto da DB
        $produto = Produto::find($id);

        //Alterar os valores do produto
        $produto->nome = request('nome');
        $produto->preco = request('preco');
        $produto->quantidade = request('quantidade');
        $produto->id_categoria = request('categoria');

        //Salvar as alterações no DB
        $produto->save();
        
        //Redirecionar para a lista de produtos
        return redirect('/produtos');
    }
    public function create(){

        $categorias = Categoria::all();

        // Retortar a view com os produtos levantados
        return view('produtos.create', compact('categorias'));
    }

    public function store(){

        $produto = new Produto();

        $produto->nome = request('nome');
        $produto->preco = request('preco');
        $produto->quantidade = request('quantidade');
        $produto->id_categoria = request('categoria');

        //Salvar as alterações no DB
        $produto->save();
        
        //Redirecionar para a lista de produtos
        return redirect('/produtos');
    }
}
