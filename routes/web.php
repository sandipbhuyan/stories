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

Route::get('/', 'PublicController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/story/{id}', 'PublicController@showStory');

Route::resource('stories', 'StoriesController');
Route::get('stories/publish/{id}', 'StoriesController@publish')->name('stories.publish');
Route::get('stories/unpublish/{id}', 'StoriesController@unpublish')->name('stories.unpublish');
