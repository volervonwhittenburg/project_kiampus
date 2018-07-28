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

Route::get('/','LoginController@login');
<<<<<<< HEAD
Route::get('/main', 'PageController@main');
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 1e71744a887ed57b437ad502f48f2c3baf098f94
