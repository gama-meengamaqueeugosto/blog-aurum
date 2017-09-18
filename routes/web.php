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

Route::get('', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['web'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('posts')->group(function () {
	    Route::get('/', ['as' => 'adm.post.index', 'uses' => 'PostsController@index']);
	    Route::get('/criar', ['as' => 'adm.post.create', 'uses' => 'PostsController@create']);
	    Route::post('/criar', ['as' => 'adm.post.store', 'uses' => 'PostsController@store']);
	});
});
