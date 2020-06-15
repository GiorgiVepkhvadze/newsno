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
Route::get('/order', 'ClientController@contact')->name('order');
Route::get('/blog', 'BlogController@all')->name('blog');
Route::get('/open_blog/{id}', 'BlogController@show_current_blog');


Route::get('/snoadmin', function ()    {
    return view('snoadmin/main');
});




######################## ADMIN SIDE
Route::get('/snoadmin/home', 'AdminController@home')->name('admin_home');
######################## AUTH SIDE
Route::get('/snoadmin/company_header', 'AdminController@company_header')->name('company_header');
Route::post('/snoadmin/company_header', 'AdminController@company_header_update')->name('update_company_header');


Route::get('/snoadmin/company_header_image', 'AdminController@company_header_image')->name('company_header_image');

Route::get('/snoadmin/company_sveti', 'AdminController@company_sveti')->name('company_sveti');
Route::post('/snoadmin/company_sveti', 'AdminController@company_sveti_update')->name('update_company_sveti');


Route::get('/snoadmin/company_mizani', 'AdminController@company_mizani')->name('company_mizani');
Route::post('/snoadmin/company_mizani', 'AdminController@company_mizani_update')->name('company_mizani_update');


Route::get('/snoadmin/company_sawarmo', 'AdminController@company_sawarmo')->name('company_sawarmo');
Route::post('/snoadmin/company_sawarmo', 'AdminController@company_sawarmo_update')->name('company_sawarmo_update');





Route::get('/snoadmin/eqsport_header_image', 'AdminController@eqsport_header_image')->name('eqsport_header_image');


Route::get('/snoadmin/eqsport_sveti', 'AdminController@eqsport_sveti')->name('eqsport_sveti');
Route::post('/snoadmin/eqsport_sveti', 'AdminController@eqsport_sveti_update')->name('eqsport_sveti_update');


Route::get('/snoadmin/add_blog', 'AdminController@add_blog')->name('admin_add_blog');
Route::post('/snoadmin/add_blog', 'AdminController@add_blog_insert')->name('admin_add_blog_insert');

Route::get('/snoadmin/all_blog', 'AdminController@list_blog')->name('admin_blog_all');

Route::get('/snoadmin/blog_drop/{id}', 'AdminController@drop_blog')->name('admin_blog_delete');




Route::get('/snoadmin/sno_likage', 'AdminController@sno_likage')->name('sno_likage');
Route::post('/snoadmin/sno_likage', 'AdminController@sno_likage_update')->name('sno_likage_update');
Route::post('/snoadmin/sno_likage_update_image_one', 'AdminController@sno_likage_update_image_one')->name('sno_likage_update_image_one');
Route::post('/snoadmin/sno_likage_update_image_two', 'AdminController@sno_likage_update_image_two')->name('sno_likage_update_image_two');







