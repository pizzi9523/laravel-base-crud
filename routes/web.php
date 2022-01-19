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

Route::get('comics', 'ComicController@index')->name('comics');
Route::get('comics/create', 'ComicController@create')->name('comics.create');
Route::post('comics', 'ComicController@store')->name('comics.store');
Route::get('comics/{comic}', 'ComicController@show')->name('comic');
Route::get('comics/{comic}/edit', 'ComicController@edit')->name('comic.edit');
Route::put('comics/{comic}', 'ComicController@update')->name('comic.update');
Route::delete('comics/{comic}', 'ComicController@destroy')->name('comic.destroy');