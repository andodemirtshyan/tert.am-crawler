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

Route::get('/', 'ArticlesController@index');
Route::get('/article/get-all', 'ArticlesController@getAll');
Route::post('/article/change-img', 'ArticlesController@changeImg');
Route::post('/article/update', 'ArticlesController@update');

Route::resource('article', 'ArticlesController', ['only' => [
    'show',
    'edit',
    'destroy',
]]);
