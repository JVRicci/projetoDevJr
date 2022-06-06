<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function(){
    return view('login');
});

Route::POST('/inicio', 'loginController@select');


Route:: get('/cad-cliente', 'clientesController@create');
Route:: get('/cad-plano', 'planosController@create');
Route:: get('/cad-cadastro', 'cadastroController@cadastrar');

Route:: POST('/cons-cliente','clientesController@store')->name('registrar-cliente');
Route:: POST('/cons-plano', 'planosController@store')->name('registrar-plano');
Route:: POST('/cons-cadastro', 'cadastroController@store')->name('registrar-cadastro');
Route:: POST('/login', 'loginController@store')->name('registrar-user');

Route::get('/cons-plano', 'planosController@select');
Route::get('/cons-cliente', 'clientesController@select');
Route::get('/cons-cadastro', 'cadastroController@select');
Route::get('/cadastro/id={id}', 'cadastroController@carregaCad');