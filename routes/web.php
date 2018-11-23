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

// FRONT
Route::get('/', function () {
    return view('front.index');
});


//ADMIN
Route::namespace('Admin')->group(function () {
    Route::get('/admin', 'HomeController@showIndex');
    Route::get('/admin/orders', 'OrderController@index')->name('orders');
    Route::post('/admin/orders/create', 'OrderController@create')->name('orders.create');
});

