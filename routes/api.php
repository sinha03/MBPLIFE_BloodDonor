<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();});

Route::post('adminlogin', array('uses' => 'Api\Auth\AdminController@login1'))->name('adminlogin');
Route::get('showdonor', 'Api\Auth\AdminController@show_donor');
Route::get('showdetail/{id}', 'Api\Auth\AdminController@showdetail');
