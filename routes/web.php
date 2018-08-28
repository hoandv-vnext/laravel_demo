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


/*
Route::get('/{hoandv}', function($user){
    return view('hoandemo', ['user' => $user]);
});
*/


//Route::get('a/{name}/{age}','demoController@index')->where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);
//Route::get('call-controller','demoController@index');

//Route::get('user/list','userController@index');

//Route::get('user/{id}/edit','userController@edit');
//Route::get('user/edit','userController@edit');
//Route::get('user/{id}/edit',['uses'=> 'userController@edit']);
//Route::post('user/{id}/update',['uses'=> 'userController@update']);

//Route::get('crud', 'CRUDController');
Route::resource('crud', 'CRUDController');

//Route::post('crud/create','CRUDController@create');




