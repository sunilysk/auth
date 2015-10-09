<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admins',function(){
   return view('admins');
});

Route::get('dashboard',function(){
    return view('dashboard');
});

Route::get('others',function(){
    return view('others');
});

Route::get('otherdashboard',function(){
    return view('otherdashboard');
});

Route::get('users',['middleware'=>'auth',function(){
    return view('users');
}]);

//User Authentication routes....

Route::get('auth/login',['middleware'=>'guest','uses'=> 'Auth\AuthController@getLogin']);
Route::post('auth/login',  'Auth\AuthController@postLogin');
Route::get('auth/logout',['middleware'=>'ulogout','uses'=>  'Auth\AuthController@getLogout']);

// User Registration routes...
Route::get('auth/register', ['middleware'=>'guest','uses'=> 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Admin Authentication routes....
Route::get('admin/login',['middleware'=>'adminguest','uses'=>  'Auth\AdminAuthController@getLogin']);
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');
Route::get('admin/logout',['middleware'=>'alogout','uses'=>  'Auth\AdminAuthController@getLogout']);

//Admin Registration routes...
Route::get('admin/register',['middleware'=>'adminguest','uses'=>  'Auth\AdminAuthController@getRegister']);
Route::post('admin/register', 'Auth\AdminAuthController@postRegister');

//Other Authentication routes....
Route::get('other/login', ['middleware'=>'otherguest','uses'=> 'Auth\OtherAuthController@getLogin']);
Route::post('other/login', 'Auth\OtherAuthController@postLogin');
Route::get('other/logout',['middleware'=>'ologout','uses'=>  'Auth\OtherAuthController@getLogout']);

//Other Registration routes...
Route::get('other/register', ['middleware'=>'otherguest','uses'=> 'Auth\OtherAuthController@getRegister']);
Route::post('other/register', 'Auth\OtherAuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{type}/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');