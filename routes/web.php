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
#Route::get('/user', 'UsersController@index');
Route::get('/', function () {
    return view('welcome');
});




*/

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');


Route::resource('movie','MovieController');

Route::resource('usuario','UsuarioController');


