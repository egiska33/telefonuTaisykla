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
    Route::get('/', 'Admin\AdminController@index')->name('index');
    Route::get('/users', 'Admin\AdminController@usersIndex')->name('users.list');
    Route::get('/repairs', 'Admin\AdminController@repairsIndex')->name('repairs.list');
    Route::get('/models/add', 'Admin\AdminController@modelsCreate')->name('models.add');
    Route::get('/manufakturers/add', 'Admin\AdminController@phonesCreate')->name('phones.add');
    Route::post('models','Admin\AdminController@modelsStore')->name('models.store');
    Route::post('/manufakturers', 'Admin\AdminController@phonesStore')->name('phones.store');

});