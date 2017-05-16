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

Route::get('/','PresentationController@index');
Route::get('download','PresentationController@getDownload');
Route::post('sendMessage','PresentationController@sendContact');
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(array('prefix' => 'admin', 'middleware' => ['auth', 'auth:web']), function () {
   Route::get('panel','AdminController@index');
   Route::get('experience','AdminController@experience');
    });
