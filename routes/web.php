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
Route::get('/contact', 'ClientController@contact')->name('contact');
Route::get('/order', 'ClientController@order')->name('order');
Route::get('/blog', 'BlogController@all')->name('blog');
Route::get('/open_blog/{id}', 'BlogController@show_current_blog');
Route::get('/sno_product', 'ClientController@sno_product')->name('sno_product');
Route::get('/kobi_product', 'ClientController@kobi_product')->name('kobi_product');
Route::get('/kobi_mineral', 'ClientController@kobi_mineral')->name('kobi_mineral');





Route::get('/snoadmin', function ()    {
    return view('snoadmin/main');
})->name('main_sno');









############################################## ადმინისტრატორის მხარე
Route::get('/pesadmin', 'ClientController@admin_login_page')->name('admin_login_page');

######################################### AXALI ADMINKA
Route::prefix('pesadmin')->group(function () {

 Route::get('/home', 'PesController@index')->name('admin_home');
 Route::get('/c/{id}', 'PesController@content')->name('content');
 Route::post('/c', 'PesController@content_edit_update')->name('content_edit_update');
 Route::post('/c_m', 'PesController@content_edit_update_image')->name('content_edit_update_image');
 Route::get('/contact', 'PesController@contact')->name('contact');
 Route::post('/contact_update', 'PesController@contact_update')->name('contact_update');



 

Route::get('/add_blog', 'PesController@add_blog')->name('admin_add_blog');
Route::post('/add_blog', 'PesController@add_blog_insert')->name('admin_add_blog_insert');
Route::get('/all_blog', 'PesController@list_blog')->name('admin_blog_all');
Route::get('/blog_drop/{id}', 'PesController@drop_blog')->name('admin_blog_delete');
Route::get('/blog_edit/{id}', 'PesController@edit_blog')->name('edit_blog');
Route::patch('/blog_edit/{id}', 'PesController@edit_blog_update')->name('edit_blog_update');

Route::get('/add_product/{id}', 'PesController@add_product')->name('add_product');
Route::post('/add_product', 'PesController@add_product_insert')->name('add_product_insert');



Route::get('/boci/{id}', 'PesController@boci')->name('boci');
Route::patch('/boci/{id}', 'PesController@updateBoci')->name('updateBoci');


Route::get('/orderProduct', 'PesController@orderProduct')->name('orderProduct');
Route::post('/orderProduct', 'PesController@orderProductPost')->name('orderProductPost');
Route::get('/orderProduct/{id}', 'PesController@orderProductEdit')->name('orderProductEdit');
Route::patch('/orderProduct/{id}', 'PesController@orderProductUpdate')->name('orderProductUpdate');
Route::get('/orderProductDelete/{id}', 'PesController@orderProductDelete')->name('orderProductDelete');
 




});

