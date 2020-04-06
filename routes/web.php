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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/produto/{id}', 'HomeController@produto')->name('produto');
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() { return redirect()->route('index');});
Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');

Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('/carrinho/compras', 'CarrinhoController@compras')->name('carrinho.compras');
Route::post('/carrinho/cancelar', 'CarrinhoController@cancelar')->name('carrinho.cancelar');
Route::post('/carrinho/desconto', 'CarrinhoController@desconto')->name('carrinho.desconto');

// rotas do admin
    Route::group(['prefix' => 'admin'], function () {
    Route::get('produtos', 'Admin\ProdutoController@index')->name('admin.produtos');
    Route::get('produtos/adicionar', 'Admin\ProdutoController@adicionar')->name('admin.produtos.adicionar');
    Route::post('produtos/salvar', 'Admin\ProdutoController@salvar')->name('admin.produtos.salvar');
    Route::get('produtos/editar/{id}', 'Admin\ProdutoController@editar')->name('admin.produtos.editar');
    Route::put('produtos/atualizar/{id}', 'Admin\ProdutoController@atualizar')->name('admin.produtos.atualizar');
    Route::get('produtos/deletar/{id}', 'Admin\ProdutoController@deletar')->name('admin.produtos.deletar');

    Route::get('cupons', 'Admin\CupomDescontoController@index')->name('admin.cupons');
    Route::get('cupons/adicionar', 'Admin\CupomDescontoController@adicionar')->name('admin.cupons.adicionar');
    Route::post('cupons/salvar', 'Admin\CupomDescontoController@salvar')->name('admin.cupons.salvar');
    Route::get('cupons/editar/{id}', 'Admin\CupomDescontoController@editar')->name('admin.cupons.editar');
    Route::put('cupons/atualizar/{id}', 'Admin\CupomDescontoController@atualizar')->name('admin.cupons.atualizar');
    Route::get('cupons/deletar/{id}', 'Admin\CupomDescontoController@deletar')->name('admin.cupons.deletar');

});

Route::get('/produtos/show','ProdutoController@show')->name('produtos.show');
Route::delete('/produtos/delete/{id}','ProdutoController@delete')->name('produtos.delete');
Route::get('/produtos/update/{id}','ProdutoController@edit')->name('produtos.edit');
Route::put('/produtos/update/{id}','ProdutoController@update');
Route::get('/produtos/criar', 'ProdutoController@create')->name('produtos.criar');
Route::post('/produtos/criar', 'ProdutoController@store')->name('produtos.cadastro');
Route::get('/indisponivel', function(){ return view ('errors.503');})->name('indisponivel');

// show colecionaveis
Route::get('/produtos/colecionaveis', 'ProdutoController@action')->name('colecionaveis');
// show informatica
Route::get('/produtos/informatica', 'ProdutoController@info')->name('informatica');
//show moda 
Route::get('/produtos/moda', 'ProdutoController@moda')->name('moda');
//show livros 
Route::get('/produtos/livros', 'ProdutoController@livro')->name('livros');
//show games
Route::get('/produtos/games', 'ProdutoController@games')->name('games');
//show musica 
Route::get('/produtos/musica', 'ProdutoController@musica')->name('musica');
//show sobre nos 
Route::get('/sobrenos', function(){ return view ('outros.sobrenos');})->name('sobrenos');
//show duvidas 
Route::get('/faq', function(){ return view ('outros.faq');})->name('faq');
//show central de atendimento 
Route::get('/contato', function(){ return view ('outros.contato');})->name('contato');





















