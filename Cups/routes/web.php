<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',	'PagesController@getIndex');
Route::get('/cart', 'PagesController@getCart');
Route::get('/checkout', 'PagesController@getCheckout');
Route::get('/product-details', 'PagesController@getProductDetails');
Route::get('/shop', 'PagesController@getShop');

// Definindo as rotas para o CRUD de produtos
Route::get		('/produtos',			'ProdutosController@index'	); // <--- LISTAR OS PRODUTOS CADASTRADOS

Route::get		('/produtos/create',	'ProdutosController@create'	); // <--- MOSTRAR UM FORMULÁRIO PARA CRIAR UM NOVO PRODUTO

Route::get		('/produtos/{id}/edit',	'ProdutosController@edit'	); // <--- MOSTRAR UM FORMULÁRIO PARA ALTERAR UM NOVO PRODUTO

Route::get		('/produtos/{id}',		'ProdutosController@show'	); // <--- MOSTRAR UM ÚNICO PRODUTO COM SEUS DETALHES E OPÇÕES

Route::post		('/produtos',			'ProdutosController@store'	); // <--- CRIAR UM PRODUTO (REDIRECIONAR PARA A LISTA...)

Route::put		('/produtos/{id}',		'ProdutosController@update'	); // <--- ALTERAR UM PRODUTO (REDIRECIONA PARA A LISTA...)

Route::delete	('/produtos/{id}',		'ProdutosController@destroy'); // <--- REMOVE UM PRODUTO (REDIRECIONA PARA A LISTA...)

Route::get	('/produtos/create',	'ProdutosController@create'); // <--- CRIAR UM PRODUTO (REDIRECIONA PARA NOVO FORMULÁRIO...)

Route::post	('/produtos',	'ProdutosController@store'); // <--- APRESENTA LISTA JÁ COM O NOVO PRODUTO ADICIONADO (REDIRECIONA PARA A LISTA...)