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

// Route::get('/', function () {
//     return view('frontEnd.index');
// });

Route::get('/', 'LandingPageController@index')->name('frontEnd.landing-page');
Route::get('/shop', 'ShopController@index')->name('frontEnd.shop');
Route::get('/shop/{product}', 'ShopController@show')->name('frontEnd.shop.show');



Route::get('/checkout', function () {
    return view('frontEnd.checkout');
});


// Route::get('/shop', function () {
//     return view('frontEnd.shop');
// });

Route::get('/blog', function () {
    return view('frontEnd.blog');
});

Route::get('/contact', function () {
    return view('frontEnd.contact');
});

Route::get('/regular', function () {
    return view('frontEnd.regular-page');
});

Route::get('/single', function () {
    return view('frontEnd.single-blog');
});

Route::get('/singleprod', function () {
    return view('frontEnd.single-product-details');
});
