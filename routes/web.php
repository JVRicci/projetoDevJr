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

Route:: POST('/cons-cliente','clientesController@store')->name('registrar-cliente');
Route:: POST('/cons-plano', 'planosController@store')->name('registrar-plano');

Route::get('/cons-plano', 'planosController@select');
Route::get('/cons-cliente', 'clientesController@select');