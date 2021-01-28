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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/ilCorso', 'CorsoController@index')->name('corso');
Route::get('/dopoCorso', 'DopoController@index')->name('dopo');
Route::get('/camp', 'CampController@index')->name('camp');
Route::get('/db', 'DatabaseController@index')->name('user');
Route::get('/db/{id}', 'DatabaseController@show')->name('user.show');