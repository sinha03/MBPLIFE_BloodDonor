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
    return view('welcome');
});
Route::get('/adminlogin', function () {
    return view('donnerside.adminlogin');
});
Route::get('/donorside', function () {
    return view('donnerside.donorside');
});


Auth::routes();

Route::get('/', 'HomeController@index');// so when you logged out it go back 
Route::get('/home', 'HomeController@index');
Route::get('/adminlogin','Api\Auth\AdminController@showLoginForm')->name('adminlogin');
Route::post('adminlogin', array('uses' => 'Api\Auth\AdminController@login1'))->name('adminlogin');

Route::get('/createdonor','Api\Auth\AdminController@donorcreate')->name('createdonor');
Route::post('createdonor', array('uses' => 'Api\Auth\AdminController@donor'))->name('createdonor');

Route::get('/showdonor','Api\Auth\AdminController@showdonor')->name('showdonor');
//Route::get('showdonor', 'Api\Auth\AdminController@show_donor');

Route::get('delete_donor/{id}','Api\Auth\AdminController@delete_donor');
Route::get('edit_donor/{id}','Api\Auth\AdminController@edit_donor');
Route::post('update_donor/{id}','Api\Auth\AdminController@update_donor')->name('update_donor');

Route::get('/createdetails/{id}','Api\Auth\AdminController@donordetail')->name('createdetails');
Route::post('createdetails/{id}', array('uses' => 'Api\Auth\AdminController@detail'))->name('detail');

Route::get('/showdetails','Api\Auth\AdminController@showdetails')->name('showdetails');

Route::get('/createnew','Api\Auth\AdminController@new')->name('createnew');
Route::post('createnew', array('uses' => 'Api\Auth\AdminController@newdonor'))->name('createnew');

Route::get('/shownew','Api\Auth\AdminController@shownew')->name('shownew');