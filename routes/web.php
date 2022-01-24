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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'Admin\DashboardController@index')->name('admin');


Route::get('comics', 'ComicController@index')->name('comics');
Route::get('comics/create', 'ComicController@create')->name('comics.create');
Route::post('comics', 'ComicController@store')->name('comics.store');
Route::get('comics/{comic}', 'ComicController@show')->name('comic');
Route::get('comics/{comic}/edit', 'ComicController@edit')->name('comic.edit');
Route::put('comics/{comic}', 'ComicController@update')->name('comic.update');
Route::delete('comics/{comic}', 'ComicController@destroy')->name('comic.destroy');


Route::get('admin/comics', 'Admin\ComicController@index')->name('admin.comics');
Route::get('admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('admin/comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comic');
Route::get('admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comic.edit');
Route::put('admin/comics/{comic}', 'Admin\ComicController@update')->name('admin.comic.update');
Route::delete('admin/comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comic.destroy');

Route::namespace('Admin')->name('admin.')->group(function () {
    Route::resource('admin/posts', 'PostController');
});