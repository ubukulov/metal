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

Route::get('/', 'IndexController@welcome')->name('home');
Route::get('catalog/{alias}', 'IndexController@catalog')->name('catalog.view');
//Route::get('{alias}/{id}', 'IndexController@product')->name('product.view');
Route::post('/leads', 'IndexController@lead')->name('lead.post');
Route::get('/user/create/kairat', 'IndexController@createUser');

Route::get('/page/{alias}', 'IndexController@page')->name('page');
