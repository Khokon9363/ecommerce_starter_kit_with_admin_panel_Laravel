<?php


Route::get('/', function () {
    return view('ecommerce.home.home');
});
Route::get('/about_us', function () {
    return view('ecommerce.about.about');
});
Route::get('/contact_us', function () {
    return view('ecommerce.contact.contact');
});
Route::get('/wishlist', function () {
    return view('ecommerce.wishlist.wishlist');
});
Route::get('/checkout', function () {
    return view('ecommerce.checkout.checkout');
});
Route::get('/product', function () {
    return view('ecommerce.product.product');
});
Route::get('/products', function () {
    return view('ecommerce.product.products');
});
// not created
Route::get('/profile_update', function () {
    return view('ecommerce..profile_update');
});
Route::get('/activities', function () {
    return view('ecommerce..activities');
});

// Route::group(['middleware' => ['auth','ecommerce.role','verified'], 'namespace' => 'Ecommerce'], function(){

    
// });