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

// User Password reset link request routes...
Route::get('auth/password/email', 'Auth\PasswordController@getEmail');
Route::post('auth/password/email', 'Auth\PasswordController@postEmail');

// User Password reset routes...
Route::get('auth/password/reset/{type}/{token}', 'Auth\PasswordController@getReset');
Route::post('auth/password/reset', 'Auth\PasswordController@postReset');


//Admin Authentication routes....
Route::get('admin/login',['middleware'=>'adminguest','uses'=>  'Auth\AdminAuthController@getLogin']);
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');
Route::get('admin/logout',['middleware'=>'alogout','uses'=>  'Auth\AdminAuthController@getLogout']);

//Admin Registration routes...
Route::get('admin/register',['middleware'=>'adminguest','uses'=>  'Auth\AdminAuthController@getRegister']);
Route::post('admin/register', 'Auth\AdminAuthController@postRegister');

// Admin Password reset link request routes...
Route::get('admin/password/email', 'Auth\AdminPasswordController@getEmail');
Route::post('admin/password/email', 'Auth\AdminPasswordController@postEmail');

// Admin Password reset routes...
Route::get('admin/password/reset/{type}/{token}', 'Auth\AdminPasswordController@getReset');
Route::post('admin/password/reset', 'Auth\AdminPasswordController@postReset');


//Other Authentication routes....
Route::get('other/login', ['middleware'=>'otherguest','uses'=> 'Auth\OtherAuthController@getLogin']);
Route::post('other/login', 'Auth\OtherAuthController@postLogin');
Route::get('other/logout',['middleware'=>'ologout','uses'=>  'Auth\OtherAuthController@getLogout']);

//Other Registration routes...
Route::get('other/register', ['middleware'=>'otherguest','uses'=> 'Auth\OtherAuthController@getRegister']);
Route::post('other/register', 'Auth\OtherAuthController@postRegister');

// Admin Password reset link request routes...
Route::get('other/password/email', 'Auth\OtherPasswordController@getEmail');
Route::post('other/password/email', 'Auth\OtherPasswordController@postEmail');

// Admin Password reset routes...
Route::get('other/password/reset/{type}/{token}', 'Auth\OtherPasswordController@getReset');
Route::post('other/password/reset', 'Auth\OtherPasswordController@postReset');

