<?php

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
Route::get('query','QueryController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');








Route::get('/verify', 'Auth\RegisterController@verifyuser')->name('verify.user');




Route::get('index', 'CurdController@index');
Route::post('createuser', 'CurdController@store');

Route::get('TableShow', 'CurdController@TableShow');

Route::get('update/{id}','CurdController@update');
Route::post('edit/{id}','CurdController@edit')->name('edit.data');
Route::get('delete/{id}','CurdController@destroy')->name('delete.data');

Route::get('dashbord','QueryController@dashbord');
