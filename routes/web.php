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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

Route::get('/quemsomos', function () {
    return view('mais.quemsomos');
});

Route::get('/oquefazemos', function () {
    return view('mais.oquefazemos');
});

Route::get('/contacto', function () {
    return view('mais.contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
