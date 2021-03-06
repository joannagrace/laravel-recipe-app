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

Route::get('/', 'HomeController@index');

Route::get('/recipes', ['as' => 'joanna', 'uses' => 'RecipeController@index']);
Route::get('/contact', 'ContactController@index');
Route::get('/login', 'LoginController@index');
Route::get('/register', 'RegisterController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
