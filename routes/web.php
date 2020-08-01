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

Route::get('/', function () {
    return view('IndexHome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'AdminController@index')->name('admin');

Route::get('users', 'UsersController@index')->name('user');

Route::get('vendors', 'VendorsController@index')->name('vendors');

Route::resource('/admin/users', 'Admin\UsersControllers', ['except' => ['show', 'store']]);

//return redirect()->route('login');
//
//Route::get('vendorsProfile', function () {
//    return redirect('admin.admin');
//});