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
    return view('welcome');
});

Route::get('/prueba', function () {
	$nombre = request("apellidos");
	return view('prueba',["nombre" => $nombre]);
});

Route::get('/prueba_2', function () {
    return view('prueba_2');
});

Route::get('/prueba_3', function () {
    return view('prueba_3');
});

Route::get('/prueba_4', function () {
    return view('prueba_4');
});

Route::get('/prueba_5', function () {
    return view('prueba_5');
});
