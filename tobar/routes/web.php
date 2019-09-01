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
    return '<h1>Home<h1>';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/detalhe/{id}', "ProdutoController@detalhe");
