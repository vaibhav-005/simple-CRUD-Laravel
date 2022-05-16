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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts','App\Http\Controllers\PostController@index');
Route::get('posts/create','App\Http\Controllers\PostController@create');
Route::post('posts/store','App\Http\Controllers\PostController@store');
Route::get('posts/{post}','App\Http\Controllers\PostController@show');
Route::get('posts/edit/{post}','App\Http\Controllers\PostController@edit');
Route::post('posts/{post}','App\Http\Controllers\PostController@update');
Route::post('posts/delete/{post}','App\Http\Controllers\PostController@destroy');

