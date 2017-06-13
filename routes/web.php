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
    return view('welcome');
});

Route::get('/home', function () {
    return 'homeです';
});

Route::get('/article', function () {
    return '記事一覧です';
});

Route::get('/article/detail/{id}', function ($id) {
    return 'idの受け渡し→' .$id;
});

Route::get('/article/create', 'ArticleController@index');