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

Route::get('/', 'MainController@index')->name('client.home');
Route::get('home', 'HomeController@index')->name('home');
Route::get('aboutcity', function(){return view('client.aboutcity');})->name('client.aboutcity');
Route::get('aboutmayor', function(){return view('client.aboutmayor');})->name('client.aboutmayor');
Route::get('transparancy', function(){return view('client.pdf');})->name('client.pdf');

Route::group(['middleware' => ['auth']], function () {
    // Posts
    Route::resource('posts', 'PostsController');

    // News 
    Route::resource('news', 'NewsController');

    // Images
    Route::get('images', 'ImagesController@index')->name('admin.images');
    Route::post('upload', 'ImagesController@upload')->name('images.upload');
    Route::get('delete/{id}', 'ImagesController@delete')->name('images.delete');
    Route::resource('departments', 'DepartmentsController');
    // Route::resource('transparancy', function(){return view('client.pdf');})->name('client.pdf');

});

// Route::get('departments', function (){ return view('client.departments'); })->name('departments');
Auth::routes();
