<?php


Route::group(['prefix' => '/admin', 'as' => 'admin.' ,'middleware' => ['auth','ecommerce.role','verified'], 'namespace' => 'Dashboard'], function(){
    
    Route::get('/home', 'DashboardController@dashboard')->name('home');
    
});