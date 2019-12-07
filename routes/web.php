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

Route::get('/', function () { return view('index');})->name('index');

Route::get('/colecionaveis', function () {
    return view('colecionaveis');
})->name('colecionaveis');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/sobrenos', function () {
    return view('sobrenos');
})->name('sobrenos');

Route::get('/pagina_produto', function () {
    return view('pagina_produto');
})->name('pagina_produto');

Route::get('/moda', function () {
    return view('moda');
})->name('moda');

Route::get('/livros', function () {
    return view('livros');
})->name('livros');

Route::get('/informatica', function () {
    return view('informatica');
})->name('informatica');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/produtos/criar', 'ProductController@create')->name('products-create');
Route::post('/produtos/criar', 'ProductController@store')->name('cadastro_produto');
//show 
Route::get('/produtos/show','ProductController@show')->name('products-show');
//delete 
Route::delete('/produtos/delete/{id}','ProductController@delete')->name('products-delete');
//update
Route::get('/produtos/update/{id}','ProductController@edit');
Route::put('/produtos/update/{id}','ProductController@update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
