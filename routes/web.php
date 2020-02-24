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

Route::get('/', 'MainController@index');
Route::get('home', 'HomeController@index')->name('home');

// Images
Route::get('images', 'ImagesController@index')->name('admin.images');
Route::post('upload', 'ImagesController@upload')->name('images.upload');
Route::get('delete/{id}', 'ImagesController@delete')->name('images.delete');

// Posts
Route::resource('posts', 'PostsController');

// News 
Route::resource('news', 'NewsController');

// Route::get('departments', function (){ return view('client.departments'); })->name('departments');
Route::resource('departments', 'DepartmentsController');
Auth::routes();


