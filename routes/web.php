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

Route::get('/', function () {
    return view('index');
});


Route::get('/article','ArticleController@index');
Route::get('/article/create', 'ArticleController@getCreate');
Route::get('/article/detail/{id}/edit','ArticleController@getEdit');
Route::post('/article/detail/{id}/edit','ArticleController@postEdit');
Route::get('/article/detail/{id}','ArticleController@detail');
Route::post('/article/create', 'ArticleController@postCreate');