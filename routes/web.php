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
    return view('home');
});

Route::get('verConsulta/{id}', function ($id) {
    return view('verConsulta', array('id'=>$id));
});

Route::get('invitar', function () {
    return view('invitar');
});

Route::get('crearConsulta', function () {
    return view('crearConsulta');
});

Route::get('login', function () {
    return view('login');
});

Route::get('logout', function () {
    return view('logout');
});
