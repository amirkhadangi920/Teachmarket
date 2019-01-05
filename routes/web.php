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

Route::get('/', function () {
    return view('home');
});
Route::get('/single', function () {
    return view('single-extended');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-s', function () {
    return view('single-blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/card', function () {
    return view('card');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/mya', function () {
    return view('my-account');
});
Route::get('/compare', function () {
    return view('compare');
});