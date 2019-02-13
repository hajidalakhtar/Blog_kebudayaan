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

// admin artikel
Route::get('/admin/login', 'AdminLoginController@showLoginForm');
Route::post('/admin/login/submit', 'AdminLoginController@login')->name('admin.login');
Route::get('/admin/logout', 'AdminLoginController@logout')->name('admin.logout');
Route::get('/admin/home' , 'AdminController@home')->middleware('auth:admin')->name('artikel.admin.home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/delete/{id}', 'BlogController@delete')->name('delete');
Route::get('/admin/edit/{id}','BlogController@edit')->name('edit');
Route::post('/admin/update/{id}','BlogController@update')->name('update');
Route::resource('/admin', 'BlogController');
Route::post('/admin/submit','BlogController@store');

// admin tokoh
Route::get('/admin/tokoh/home', 'TokohController@homeAdmin')->name('tokoh.admin.home');
Route::get('/admin/tokoh/create', 'TokohController@create')->name('tokoh.admin.create');
Route::post('/admin/tokoh/store', 'TokohController@store')->name('tokoh.admin.store');
Route::get('/admin/delete/tokoh/{id}','TokohController@delete')->name('delete.tokoh');
Route::get('/admin/tokoh/edit/{id}','TokohController@edit')->name('tokoh.edit');
Route::post('/admin/tokoh/update/{id}','TokohController@update')->name('tokoh.update'); 

//  Admin manakan
Route::get('/admin/makanan/home','MakananController@index')->name('makanan.admin.home');
Route::get('/admin/makanan/create','MakananController@create')->name('makanan.admin.create');
Route::get('/admin/makanan/delete/{id}','MakananController@delete')->name('makanan.admin.delete');
Route::post('/admin/makanan/store','MakananController@store')->name('makanan.admin.store');
Route::get('/admin/makanan/store/{id}','MakananController@edit')->name('makanan.store');
Route::get('/admin/makanan/edit/{id}','MakananController@viewEdit')->name('makanan.edit');



// arikel
Route::get('/blog/details/{slug}','BlogController@show')->name('details');
Route::get('/blog/all','BlogController@allData')->name('allartikel');

// Tokoh Indonesia
Route::get('/tokoh','TokohController@index')->name('tokoh.home'); 
Route::get('/tokoh/details/{slug}','TokohController@show')->name('details.tokoh');
Route::get('/tokoh/all','TokohController@allTokoh')->name('tokoh.home.all'); 





// Makanan indonesia
Route::get('/makanan', 'MakananController@home')->name('makanan.home');
Route::get('/makanan/details/{slug}','MakananController@details')->name('details.makanan');
Route::get('/makanan/all', 'MakananController@allMakanan')->name('makanan.allMakanan');



// api
Route::get('/api', function () {
    return view('api');
});
Route::get('/api/blog', 'BlogController@blogApi');
Route::get('/api/blog/details/{slug}', 'BlogController@blogApiDetail');
Route::get('/api/tokoh', 'TokohController@allApi');
Route::get('/api/tokoh/details/{slug}', 'TokohController@apidetails');
Route::get('/api/makanan','MakananController@api');
Route::get('/api/makanan/details/{slug}', 'MakananController@detailsapi');


// search
Route::any('/search/artikel','BlogController@search');
Route::any('/search/tokoh','TokohController@search');
Route::any('/search/makanan','MakananController@search');


// PDF
Route::get('/download/pdf/{slug}','BlogController@downloadPDF');


// Auth Google
Route::get('auth/{provider}', 'AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'AuthController@handleProviderCallback');

