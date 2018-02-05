<?php

use Illuminate\Http\Request;
use App\Order;
use App\ApplyOrder;
use MongoDB\BSON;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/send_data', 'Api\OrderController@store');
    Route::post('/get_orders', 'Api\OrderController@index');
    Route::post('/logout', 'Auth\LoginController@login');
});

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');