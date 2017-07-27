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

Route::get('/about', function() {
return '<h1>Halo</h1>'
.'Selamat datang di webapp saya<br>Laravel, emang keren';
});

Route::get('latihan', function() {
    return view('about');
});

Route::get('/nama/{halaman}', function() {
	$a = 'John';
return 'Ini Halaman About <b>'.$a.'</b>';
});