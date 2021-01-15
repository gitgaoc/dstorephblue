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
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomestoreController@index');
Route::get('/selected', 'HomestoreController@selected_product');
Route::get('/seller', 'HomestoreController@seller');
Route::get('/about-us', 'HomestoreController@aboutus');
Route::get('/customer-care', 'HomestoreController@customer_care');

// Login and Signup
Route::get('/login', 'AuthenticationController@login');