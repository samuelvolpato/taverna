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

//Route::get('/', 'IndexController@index')->name('index');

Route::get('/colecionaveis', function () {
    return view('colecionaveis');
})->name('colecionaveis');


// Route::get('/contato', function () {
//     return view('contato');
// })->name('contato');

// Route::get('/faq', function () {
//     return view('faq');
// })->name('faq');

// Route::get('/sobrenos', function () {
//     return view('sobrenos');
// })->name('sobrenos');

// Route::get('/pagina_produto', function () {
//     return view('pagina_produto');
// })->name('pagina_produto');

// Route::get('/moda', function () {
//     return view('moda');
// })->name('moda');

// Route::get('/livros', function () {
//     return view('livros');
// })->name('livros');

// Route::get('/informatica', function () {
//     return view('informatica');
// })->name('informatica');

// Route::get('/games', function () {
//     return view('games');
// })->name('games');

Route::get('/produtos/criar', 'ProductController@create')->name('products-create');
Route::post('/produtos/criar', 'ProductController@store')->name('cadastro_produto');
//show 
Route::get('/produtos/show','ProductController@show')->name('products-show');
//delete 
Route::delete('/produtos/delete/{id}','ProductController@delete')->name('products-delete');
//update
Route::get('/produtos/update/{id}','ProductController@edit');
Route::put('/produtos/update/{id}','ProductController@update');

// show colecionaveis
Route::get('/colecionaveis-teste', 'ProductController@action');
// show informatica
Route::get('/informatica-teste', 'ProductController@info');
// pagina do produto 
Route::get('/pagina-produto/{id}', 'ProductController@produto');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', function () { return view('cart.index');})->name('index');
Auth::routes(); 

Route::get('/', 'HomeController@index')->name('index');
Route::get('/product/{id}', 'HomeController@product')->name('product');
// Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/add', function() {
    return redirect()->route('index');
});
Route::post('/cart/add', 'CartController@adicionar')->name('cart.adicionar');
Route::delete('/cart/remove', 'CartController@remover')->name('cart.remover');
Route::post('/cart/conclude', 'CartController@concluir')->name('cart.concluir');
Route::get('/cart/shoppings', 'CartController@compras')->name('cart.shoppings');
Route::post('/cart/cancel', 'CartController@cancelar')->name('cart.cancel');
Route::post('/cart/desconto', 'CartController@desconto')->name('cart.desconto');

// rotas do admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('products', 'Admin\ProductController@index')->name('admin.produtos');
    Route::get('products/add', 'Admin\ProductController@adicionar')->name('admin.products.add');
    Route::post('products/store', 'Admin\ProductController@salvar')->name('admin.products.store');
    Route::get('products/edit/{id}', 'Admin\ProductController@editar')->name('admin.products.edit');
    Route::put('products/update/{id}', 'Admin\ProductController@atualizar')->name('admin.products.update');
    Route::get('products/deletar/{id}', 'Admin\ProductController@deletar')->name('admin.products.delete');

    Route::get('cupons', 'Admin\CupomDescontoController@index')->name('admin.cupons');
    Route::get('cupons/adicionar', 'Admin\CupomDescontoController@adicionar')->name('admin.cupons.adicionar');
    Route::post('cupons/salvar', 'Admin\CupomDescontoController@salvar')->name('admin.cupons.salvar');
    Route::get('cupons/editar/{id}', 'Admin\CupomDescontoController@editar')->name('admin.cupons.editar');
    Route::put('cupons/atualizar/{id}', 'Admin\CupomDescontoController@atualizar')->name('admin.cupons.atualizar');
    Route::get('cupons/deletar/{id}', 'Admin\CupomDescontoController@deletar')->name('admin.cupons.deletar');

});
