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


Route::get('/login', function(){
	return view('general/login');
});

Route::get('/usuarios', function() {
	return 'usuarios';
});

Route::get('/saludo/{name}', function ($name) {
    dd('Bienvenido '.$name);
});

Route::get('/welcome/{firstname}/{lastname}', function ($firstname,$lastname) {
    dd('Welcome '.$firstname.' '.$lastname);
});
