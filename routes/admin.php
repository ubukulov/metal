<?php
Route::get('/login', 'Admin\AuthController@login')->name('show.login');
Route::post('/login', 'Admin\AuthController@authenticate')->name('authenticate');
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin'], 'namespace' => 'Admin'], function(){
    Route::get('/', 'IndexController@dashboard')->name('admin.dashboard');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');
    Route::resource('/page', 'PageController');

});
