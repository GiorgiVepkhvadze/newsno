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

Route::get('lang/{locale}', 'LocalizationController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ClientController@index')->name('main');
Route::get('/about', 'ClientController@about')->name('about');
Route::get('/export', 'ClientController@export')->name('export');
Route::get('/sno_likage', 'ClientController@sno_likage')->name('sno_likage');
Route::get('/sno_quality', 'ClientController@sno_quality')->name('sno_quality');
Route::get('/sno_mineral', 'ClientController@sno_mineral')->name('sno_mineral');
Route::get('/sno_limoni', 'ClientController@sno_limoni')->name('sno_limoni');

Route::get('/kobi_likage', 'ClientController@kobi_likage')->name('kobi_likage');










