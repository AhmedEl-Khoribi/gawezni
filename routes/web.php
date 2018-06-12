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

  Route::get('/admin/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/admin/login', 'AdminAuth\LoginController@login');

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function () {
  Route::get('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/users', 'dashboard\ClientsController@index');
  Route::get('/approve/{id}', 'dashboard\ClientsController@approve');
  Route::get('/unapprove/{id}', 'dashboard\ClientsController@block');
  Route::get('/details/{id}', 'dashboard\ClientsController@show');
  Route::get('/edit_user/{id}', 'dashboard\ClientsController@edit');
  Route::patch('/updateUser/{id}', 'dashboard\ClientsController@update');
  Route::get('/fakeData', 'dashboard\ClientsController@fakers');
  Route::get('/country', 'dashboard\ClientsController@country');
  Route::get('/delete/{id}', 'dashboard\ClientsController@destroy');
  Route::get('/country/city/{id}', 'dashboard\ClientsController@city');



  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'client'], function () {
  Route::get('/login', 'ClientAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ClientAuth\LoginController@login');
  Route::get('/logout', 'ClientAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');
});
