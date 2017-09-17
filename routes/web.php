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

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::get('register', ['as' => 'register', 'uses' => 'AuthController@register']);
Route::post('register', ['as' => 'post-registration', 'uses' => 'AuthController@doRegister']);

Route::post('login', [ 'as' => 'login', 'uses' => 'AuthController@doLogin']);
Route::get('logout', [ 'as' => 'logout', 'uses' => 'AuthController@logout']);

// Route::post('register', );
