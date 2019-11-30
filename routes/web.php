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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/colecionaveis', function () {
    return view('colecionaveis');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/pagina_produto', function () {
    return view('pagina_produto');
});

Route::get('/moda', function () {
    return view('moda');
});

Route::get('/livros', function () {
    return view('livros');
});

Route::get('/informatica', function () {
    return view('informatica');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/index', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
