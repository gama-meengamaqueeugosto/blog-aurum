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

use App\Models\Post;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', 'HomeController@blog');
Route::get('lista-post', 'PostController@index');

Route::post('/', ['as' => 'leads.save', 'uses' => 'LeadsController@store']);
Route::get('/post',  function (){
    return view('post');
});


