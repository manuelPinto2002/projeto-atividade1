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

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('contactos', function () {
    return view('contactos');
});
Route::get('noticias', function () {
    return view('noticias');
});
Route::get('empresa', function () {
    return view('empresa');
});
Route::get('onde-estamos', function () {
    return view('onde-estamos');
});
Route::get('formulario', function () {
    return view('formulario');
});


Route::get('formulario','App\Http\Controllers\FormController@mostrarForm')->name('mostrar.form');

Route::post('formulario','App\Http\Controllers\FormController@processarForm')->name('processar.form');
