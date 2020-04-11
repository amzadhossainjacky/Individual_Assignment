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

//landing page route
Route::get('/', function () {
    return view('main');
});

//login route

Route::get('/system/login', 'LoginController@index')->name('login');
Route::post('/system/login', 'LoginController@store')->name('login');
Route::get('/system/logout', 'LogoutController@index')->name('logout');

Route::get('/system/register', 'RegistrationController@index')->name('register');
Route::post('/system/register', 'RegistrationController@store')->name('register');


Route::get('/system/admin/home', 'AdminHomeController@index')->name('admin_home');
Route::get('/system/busmanager/{id}/delete', 'AdminHomeController@destroy')->name('destroy_manager');


Route::get('/system/supportstaff/home', 'ManagerHomeController@index')->name('manager_home');

