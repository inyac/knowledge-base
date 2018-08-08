<?php
use Illuminate\Support\Facades\Route;
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

Route::get('', 'ArticleController@index')->name('home');
Route::get('/articles/create', 'ArticleController@create');
Route::get( '/articles/{article}', 'ArticleController@show')->name('show');
Route::get('/articles/{article}/delete', 'ArticleController@destroy');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/{article}/edit', 'ArticleController@edit');
Route::put('/articles/{article}', 'ArticleController@update');
