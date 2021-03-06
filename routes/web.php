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
Route::get('/home', 'HomeController@index');
Route::get('/intro', 'HomeController@intro');


// Login: user
Route::get("login", "Auth\LoginController@showLoginForm");
//Route::post("login", "Auth\LoginController@login")->name("user.login");
//Route::get("logout", "Auth\LoginController@logout")->name("user.logout");
Route::get("/user/list", "CrudController@index");

// Login: 2fa
Route::get('/2fa','PasswordSecurityController@show2faForm');
Route::post('/generate2faSecret','PasswordSecurityController@generate2faSecret')->name('generate2faSecret');
Route::post('/2fa','PasswordSecurityController@enable2fa')->name('enable2fa');
Route::post('/disable2fa','PasswordSecurityController@disable2fa')->name('disable2fa');


// Resource: manage
Route::resource('crud', 'CRUDController');


//email actions
Route::group(["prefix" => "email"], function() {

    Route::get("signin", "Auth\DeviceController@showLoginForm");
    Route::post("login", "Auth\DeviceController@login")->name("device.login");
    Route::get("logout", "Auth\DeviceController@logout")->name("device.logout");
    Route::get("/", "EmailController@index");

});
