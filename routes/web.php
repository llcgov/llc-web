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

// Route::get('/home', function () {
//     return view('admin.index');
// });

// Route::get('/', function () {
//     return view('client.index');
// });
Route::get('/', 'MainController@index');
// Images
Route::get('images', 'ImagesController@index')->name('admin.images');
Route::post('upload', 'ImagesController@upload')->name('images.upload');
Route::get('delete/{id}', 'ImagesController@delete')->name('images.delete');

// Posts
Route::resource('posts', 'PostsController');

// News 
Route::resource('news', 'NewsController');


Auth::routes();
Route::get('coming-soon', function () {
    return view('coming_soon');
});

Auth::routes();

// Route::get('/home', function() { return view('admin.index');} )->name('home');

Route::get('/home', 'HomeController@index')->name('home');
