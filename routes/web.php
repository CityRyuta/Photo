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

Route::get('/', 'PostController@index');

/*/posts/(対象データのID)*/
Route::get('/posts/{post}', 'PostController@show');

/*route/web.phpで/postsにGETリクエストが来たらPostControllerのindexメソッドを呼ぶ*/
Route::get('/posts', 'PostController@index');