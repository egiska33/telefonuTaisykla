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
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware'=> ['auth']], function () {
    Route::resource('/repair', 'RepairController');
    Route::get('/userProfile', 'UserController@index')->name('user.profile');
});

Route::group(['middleware'=> ['auth', 'admin'], 'prefix'=>'admin'], function (){
    Route::resource('/', 'Admin\AdminController');
});