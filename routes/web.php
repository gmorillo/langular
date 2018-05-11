<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('admin.pendientes-por-publicar');
});

Route::get('pendientes-por-publicar', function () {
    return view('admin.pendientes-por-publicar');
});

Route::get('estado-pago-publicaciones', function () {
    return view('admin.estado-pago-publicaciones');
});


Route::get('publicacionesAdminlist', function () {
    return view('publicacionesAdminlist');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
