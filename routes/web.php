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

Route::post('/', ['as' => 'leads.save', 'uses' => 'LeadController@store']);
Route::get('/', ['as' => 'welcome', 'uses' => 'HomeController@blog']);
Route::get('/post/{slug}', ['as' => 'site.post', 'uses' => 'HomeController@post']);

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/ebook', function () {
    return view('ebook');
});

Route::get('/cartao', function () {
    return view('cartao');
});

Route::group('middleware' => 'web'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('posts')->group(function () {
	    Route::get('/', ['as' => 'adm.post.index', 'uses' => 'PostsController@index']);
	    Route::get('/criar', ['as' => 'adm.post.create', 'uses' => 'PostsController@create']);
	    Route::post('/criar', ['as' => 'adm.post.store', 'uses' => 'PostsController@store']);
	});
});

Auth::routes();
