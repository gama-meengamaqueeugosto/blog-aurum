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
Route::get('/lead/{id}', ['as' => 'site.leads.destroy', 'uses' => 'LeadController@destroy']);
Route::get('/meengamaqueeugosto/show-leads', ['as' => 'site.leads.show', 'uses' => 'LeadController@show']);

Route::get('/contato', function () {
    return view('contato');
});
Route::get('/cartao-teste', function() {
	return view("cards.one");
});

Route::get('/pesquisa', function() {
	return view('pesquisa');
});

Route::get('/ebook', function () {
    return view('ebook');
});

Route::get('/cartao', function () {
    return view('cartao');
});

Route::get('gera-csv', ['uses' => 'LeadController@csv']);

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/lead/{id}', ['uses' => 'LeadController@edit']);

    Route::prefix('posts')->group(function () {
	    Route::get('/', ['as' => 'adm.post.index', 'uses' => 'PostsController@index']);
	    Route::get('/criar', ['as' => 'adm.post.create', 'uses' => 'PostsController@create']);
	    Route::get('/{id}/editar', ['as' => 'adm.post.edit', 'uses' => 'PostsController@edit']);
	    Route::put('/{id}', ['as' => 'adm.post.update', 'uses' => 'PostsController@update']);
	    Route::post('/criar', ['as' => 'adm.post.store', 'uses' => 'PostsController@store']);
	    Route::get('/{id}/excluir', ['as' => 'adm.post.destroy', 'uses' => 'PostsController@destroy']);
	});
});

Auth::routes();
