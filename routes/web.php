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
Route::view('/', 'front.index');
Route::get('/checkStatus/{phone}/show', 'StatusCheckController');

Route::get('/test/{phone}', function ($phone){
    $res = DB::table('orders')
        ->join('customers', 'orders.user_id', '=', 'customers.id')
        ->join('statuses', 'status_id', '=', 'statuses.id')
        ->select('orders.device_name', 'orders.device_id', 'statuses.name', 'orders.created_at')
        ->where('customers.phone', $phone)
        ->first();

    $res->device_id = '';
});



//ADMIN
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@showIndex');
    Route::resource('orders','OrderController');
});


