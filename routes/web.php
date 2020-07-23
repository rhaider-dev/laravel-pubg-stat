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

Route::get('/','LandingPageController@index');
Route::get('/posts','PostController@posts');
Route::get('/post/{slug}','PostController@singlePost');
Route::get('/page/{slug}','CustomPageController@index');

Route::get('/contact','ContactPageController@index');
Route::post('/contact/post','ContactPageController@contact')->name('contact.post');

Route::get('/search-player','LandingPageController@search')->name('player.search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

