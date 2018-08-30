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

/*Route::get('/', function () {
    return view('registration.index');
});*/
/*
|--------------------------------------------------------------------------
|                                Registration Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/','Auth\RegistrationController@create')->name('/');
Route::post('store','Auth\RegistrationController@store')->name('store');
Route::get('view','Auth\RegistrationController@index')->name('view');
Route::get('login-form','Auth\RegistrationController@LoginForm')->name('login-form');
Route::post('login','Auth\RegistrationController@login')->name('login');
Route::get('logout','Auth\RegistrationController@logout')->name('logout');
Route::get('show/{id}','Auth\RegistrationController@show')->name('show');
Route::get('edit/{id}','Auth\RegistrationController@edit')->name('edit');
Route::post('update/{id}','Auth\RegistrationController@update')->name('update');
Route::get('destroy/{id}','Auth\RegistrationController@destroy')->name('destroy');


