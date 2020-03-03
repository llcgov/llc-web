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
Route::get('transparency', function(){return view('client.transparency');})->name('client.transparency');

Route::get('posts/show/{id}', 'PostsController@show')->name('posts.show');

Route::group(['middleware' => ['auth']], function () {
    // Posts
    Route::resource('posts', 'PostsController');

    // News 
    Route::resource('news', 'NewsController');
    
    // Departments 
    Route::resource('departments', 'DepartmentsController');

    // Transparency
    Route::resource('transparencies', 'TransparencyController');

    // Images
    Route::get('images', 'ImagesController@index')->name('admin.images');
    Route::post('upload', 'ImagesController@upload')->name('images.upload');
    Route::get('delete/{id}', 'ImagesController@delete')->name('images.delete');

});

// Route::get('departments', function (){ return view('client.departments'); })->name('departments');
Auth::routes();
