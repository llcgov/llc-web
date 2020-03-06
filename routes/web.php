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
Route::get('aboutcity', function(){return view('client.aboutcity');})->name('client.aboutcity');
Route::get('aboutmayor', function(){return view('client.aboutmayor');})->name('client.aboutmayor');
Route::get('transparency', 'MainController@transparency')->name('client.transparency');
Route::get('posts/show/{id}','PostsController@show')->name('posts.show');

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('adminstrator')->group(function () {
        Route::get('home', 'HomeController@index')->name('home');

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
});
Auth::routes(['register' => False]);