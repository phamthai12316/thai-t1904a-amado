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

Route::get('/','WebController@home');
Route::get('/shop','WebController@shop');
Route::get('/product-details/{id}','WebController@productDetail');
Route::get('/shopping/{id}','WebController@shopping');
Route::get('/student','WebController@student');
Route::get('/student-survey','WebController@survey');


//
Route::get('/cart','WebController@cart');
Route::get('/checkout','WebController@checkout');
Route::get('/signin','WebController@signin');
Route::get('/signup','WebController@signup');
Route::get('/admin','WebController@admin');
Route::get('/admin-products','WebController@adminProduct');
Route::get('/admin-categories','WebController@adminCategory');
Route::get('/admin-brands','WebController@adminBrand');
