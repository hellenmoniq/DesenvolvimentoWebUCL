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

Route::get('/', function () {  //closure
    return view('welcome');
});

Route::get('/clientes', 'ClientesController@exibirClientes');
Route::get('/clientes/{id}', 'ClientesController@detalhesCliente') ->name ('detalhesCliente');

//Resource Controller -> Já tras os metodos e rotas
Route::resource('/produtos', 'ProdutosController');
Route::resource('/representantes', 'RepresentantesController');