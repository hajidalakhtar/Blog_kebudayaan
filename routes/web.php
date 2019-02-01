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
return redirect('/home');
});

Auth::routes();

// admin
Route::get('/admin/login', 'AdminLoginController@showLoginForm');
Route::post('/admin/login/submit', 'AdminLoginController@login')->name('admin.login');
Route::get('/admin/logout', 'AdminLoginController@logout')->name('admin.logout');
Route::get('/admin/home' , 'AdminController@home')->middleware('auth:admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/delete/{id}', 'BlogController@delete')->name('delete');
Route::get('/admin/edit/{id}','BlogController@edit')->name('edit');
Route::post('/admin/update/{id}','BlogController@update')->name('update');
// api
Route::get('/api/blog', 'BlogController@blogApi');
Route::get('/api/blog/detail/{slug}', 'BlogController@blogApiDetail');



// arikel

Route::resource('/admin', 'BlogController');
Route::post('/admin/submit','BlogController@store');
Route::get('/blog/details/{slug}','BlogController@show')->name('details');