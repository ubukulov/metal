<?php
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'IndexController@dashboard')->name('admin.dashboard');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');
});
