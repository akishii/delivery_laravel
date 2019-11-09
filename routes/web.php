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

Route::get('/order', 'OrderFormController@input');
Route::post('/order', 'OrderFormController@input');

Route::post('/confirm', 'OrderFormController@post');

Route::get('/confirm', 'OrderFormController@confirm');

Route::get('/complete', 'OrderFormController@complete');
