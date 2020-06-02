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
Route::get('/','PagesController@home');
Route::get('/Details','DetailController@index');
Route::get('/Details/create','DetailController@create');
Route::get('/Details/json','DetailController@json');
Route::get('/Details/{users}','DetailController@show');
Route::post('/Details','DetailController@store');
Route::delete('/Details/{users}','DetailController@destroy');
Route::get('/Details/{users}/edit','DetailController@edit');
Route::put('/Details/{users}','DetailController@update');
Route::get('/post','PostController@index');
Route::get('/post/create','PostController@create');
Route::get('/post/json','PostController@json');
Route::get('/post/{posts}','PostController@show');
Route::post('/post','PostController@store');
Route::delete('/post/{posts}','PostController@destroy');
Route::get('/post/{posts}/edit','PostController@edit');
Route::put('/post/{posts}','PostController@update');



