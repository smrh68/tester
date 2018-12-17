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


Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('show.login');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('reset-password', 'ResetPasswordController@showResetForm')->name('password.request');
});

Route::post('logout', 'Auth\LoginController@logout', ['middleware' => 'admin'])->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

});
