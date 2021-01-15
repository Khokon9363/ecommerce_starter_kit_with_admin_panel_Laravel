## A E-commerce starter kit with A Dashboard / Admin Panel

## All of the Laravel authentication used on this => (Register, Email verification, Login, Forget Password with Mailtrap)

## Ecommerce Middleware registered

## Different Route file registered
     1) Ecommerce.php
     2) Dashboard.php

## Controllers are separated and namespaced are registered in route files by Hridoy
               Route::group(['prefix' => 'test', 'as' => 'test.', 'middleware' => ['test','test2','test3'], 'namespace' => 'Test'], function(){
                      Route::get('/home', 'DashboardController@dashboard')->name('home');
               });

## Two Themes are available in this by default ('Look Care', 'Admin Kit')
    
    from themehunt



## Wanna use it ?
   1) Clone this
   2) Composer Install
   3) php artisan key:generate
   4) Setup database name in .env
   5) Setup application name in .env
   6) Setup MAIL INFO in .env from Your mailtrap Account
   7) php artisan migrate