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
    //ruta principal, lo que está entre ' ' es el nombre de la ruta
Route::get('/', function () {
    //aquí iría el index
    return view('MenuCliente.Cliente');
});
