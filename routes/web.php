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

Route::get('/', function () {
    return view('register');
})->name('index');

/*Implementar página de registrado com sucesso.*/
// Route::get('/success', 'UserController@index')->name('user.registered');

Route::post('/store', 'UserController@store')->name('user.store');

Route::get('/home/login', function () {
    return view('login');
})->name('home.login');

/*Trocar para post.*/
Route::get('/user/check', 'UserController@check')->name('user.check');