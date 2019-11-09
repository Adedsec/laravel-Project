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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('WelcomeRoute');

Route::get('/books', 'BookController@index')->name('indexRoute');
Route::post('/books/', 'BookController@store')->name('storeRoute');
Route::get('books/create', 'BookController@create')->name('createRoute');
Route::get('/books/{id}', 'BookController@show')->name('showRoute');
Route::get('/books/{id}/edit','BookController@edit')->name('editRoute');
Route::patch('/books/{id}','BookController@update')->name('updateRoute');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
