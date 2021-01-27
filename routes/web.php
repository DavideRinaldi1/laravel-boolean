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


Route::get('/', 'HomeController@index');
Route::get('/ilCorso', 'CorsoController@index');
Route::get('/dopoCorso', 'DopoController@index');
Route::get('/camp', 'CampController@index');
Route::get('/db', 'DatabaseController@index');