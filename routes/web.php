<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'name' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/','AdminController@index')->name('admin');
    Route::get('/get-details','AdminController@Name')->name('A-details');
    Route::resource('test', 'TestController');
});

Route::group(['prefix' => 'user', 'middleware' => 'user', 'name' => 'user', 'namespace' => 'User'], function () {
    Route::get('/get-details','UserController@Name')->name('U-details');
    Route::get('/','UserController@index')->name('user');
});

// Route::get('/user', 'User\UserController@index')->name('user')->middleware('user');
// Route::get('/admin', 'Admin\AdminController@index')->name('admin')->middleware('admin');
// Route::get('/home', 'HomeController@index')->name('home');
