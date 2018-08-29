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

// Home

Route::get('/', function () {
    return view('home');
});


// login


// Resource: manage
Route::resource('crud', 'CRUDController');


Auth::routes();

Route::get('/home', 'HomeController@index');

// Login: user
Route::get('login', 'Auth\LoginController@getLogin');
Route::post('login', 'Auth\LoginController@postLogin')->name('login');
Route::get('logout', 'Auth\LoginController@getLogout')->name('logout');

//email actions
Route::group(["prefix" => "email"], function() {

    Route::get("login", "Auth\DeviceController@showLoginForm");
    Route::post("login", "Auth\DeviceController@login")->name("device.login");
    Route::get("logout", "Auth\DeviceController@logout")->name("device.logout");
    Route::get("/", "EmailController@index");

});
