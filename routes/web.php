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

Route::get('/', 'FrontController@index');
Route::get('index','FrontController@index');
Route::get('register','FrontController@register');
//Route::get('login','FrontController@lo');
Route::get('maleRegister','FrontController@MaleRegisterForm');
Route::post('maleRegister','FrontController@MaleRegister');
Route::get('femaleRegister','FrontController@FemaleRegisterForm');
Route::post('femaleRegister','FrontController@FemaleRegister');
Route::get('city/{id}','FrontController@city');
Route::get('email/{id}','FrontController@email');
Route::get('username/{id}','FrontController@username');
Route::get('phone/{id}','FrontController@phone');
Route::get('salary/{id}','FrontController@salary');
Route::get('height/{id}','FrontController@height');
Route::get('weight/{id}','FrontController@weight');
Route::post('visitor/home','ClientAuth\LoginController@login');

  Route::get('/admin/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/admin/login', 'AdminAuth\LoginController@login');

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function () {
  Route::get('/logout', 'AdminAuth\LoginController@logout')->name('logout');
  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  //clients
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

  //messages
  Route::get('/send_message/{id}', 'dashboard\MessageToClientsController@index');
  Route::get('/send/message', 'dashboard\MessageToClientsController@sendMessage');

  //site info
  Route::get('/site_info', 'dashboard\SiteInfoController@index');
  Route::get('/add_site_info', 'dashboard\SiteInfoController@create');
  Route::get('/edit_info/{id}', 'dashboard\SiteInfoController@edit');
  Route::get('/delete_info/{id}', 'dashboard\SiteInfoController@destroy');
  Route::patch('/updateSiteInfo/{id}', 'dashboard\SiteInfoController@update');

  //about us
  Route::get('/about-us', 'dashboard\OtherSiteInfoController@showAboutUs');
  Route::get('/edit_about_us/{id}', 'dashboard\OtherSiteInfoController@editAboutUs');
  Route::patch('/updateAboutUs/{id}', 'dashboard\OtherSiteInfoController@updateAboutUs');

  //Contact us
  Route::get('/contact_us', 'dashboard\OtherSiteInfoController@showContactUs');
  Route::get('/edit_contact_us/{id}', 'dashboard\OtherSiteInfoController@editContactUs');
  Route::patch('/updateContactUs/{id}', 'dashboard\OtherSiteInfoController@updateContactUs');

  //FAQS
  Route::get('/faqs', 'dashboard\OtherSiteInfoController@showFAQ');
  Route::get('/edit_faqs/{id}', 'dashboard\OtherSiteInfoController@editFAQ');
  Route::patch('/updateFAQS/{id}', 'dashboard\OtherSiteInfoController@updateFAQ');
  Route::get('/createFaqs', 'dashboard\OtherSiteInfoController@createFAQ');
  Route::post('/storeFaq', 'dashboard\OtherSiteInfoController@storeFAQ');
  Route::get('/delete_faq/{id}', 'dashboard\OtherSiteInfoController@destroyFaq');

  //MailBox
  Route::get('/mailbox', 'dashboard\MessageToClientsController@seeAll');


  //resets
  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::resource('country','CountryController');
  Route::resource('city','CityController');
});

Route::group(['prefix' => 'client'], function () {
  Route::post('/login', 'ClientAuth\LoginController@login');
  Route::get('/logout', 'ClientAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');
});
