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

// Auth: default

Auth::routes();

// Home
Route::get('home', 'HomeController@index');

// Login: user
Route::get("login", "Auth\LoginController@showLoginForm");
//Route::post("login", "Auth\LoginController@login")->name("user.login");
Route::get("logout", "Auth\LoginController@logout")->name("user.logout");
Route::get("/", "CrudController@index");

// Resource: manage
Route::resource('crud', 'CRUDController');


//email actions
Route::group(["prefix" => "email"], function() {

    Route::get("signin", "Auth\DeviceController@showLoginForm");
    Route::post("login", "Auth\DeviceController@login")->name("device.login");
    Route::get("logout", "Auth\DeviceController@logout")->name("device.logout");
    Route::get("/", "EmailController@index");

});
