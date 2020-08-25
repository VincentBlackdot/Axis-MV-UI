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
//normal users upon login
Route::get('admin', 'AdminController@index')->name('admin');

Route::get('users', 'UsersController@index')->name('user');

Route::get('vendors', 'VendorsController@index')->name('vendors');
//admin side
Route::get('usersProfile', 'UsersProfileController@index')->name('usersProfile');

Route::get('vendorsProfile', 'VendorsProfileController@index')->name('vendorsProfile');

Route::get('vendorsTables', 'VendorsTablesControllers@index')->name('vendorsTables');

Route::get('users-table', 'AdminController@UsersTable')->name('users-table');

Route::get('usersTables', 'UsersTablesControllers@index')->name('usersTables');

Route::get('adminsTable', 'AdminsTablesController@index')->name('adminsTable');

Route::get('adminsProfile', 'AdminsProfileController@index')->name('adminsProfile');

Route::resource('/admin/users', 'Admin\UsersControllers', ['except' => ['show', 'store']]);


// admin side table routes
Route::get('usersTables', 'UsersTablesControllers@UsersTables')->name('usersTables');

Route:: get('/edituser-row/{id}', 'UsersTablesControllers@UsersTablesEdit');
Route:: put('/update-row/{id}', 'UsersTablesControllers@UserEditUpdate');




//This is a controller for admin pages

//Route::get('user-profile', 'UserProfileController@userProfile');

Route::get('password-recovery', 'AdminController@PasswordRecovery')->name('password-recovery');

Route::get('mail-box', 'AdminController@AdminMailBox')->name('mail-box');
Route::get('email-details', 'AdminController@AdminEmailDetails')->name('email-details');
Route::get('message-chat', 'AdminController@AdminChats')->name('message-chat');

Route::get('admin-account', 'AdminController@AdminAccount')->name('admin-account');

Route::get('product-list', 'AdminController@ProductList')->name('product-list');

Route::get('email-compose', 'AdminController@ComposeEmail')->name('email-compose');

Route::get('photo-slide', 'AdminController@PhotoSlide')->name('photo-slide');

Route::get('calendar', 'AdminController@CalendarPage')->name('calendar');

Route::get('file-manager', 'AdminController@FileManager')->name('file-manager');
Route::get('profile', 'AdminController@AdminProfile')->name('profile');





//LOGIN AND SIGN UP
//Route::get('')

//return redirect()->route('login');
//
//Route::get('vendorsProfile', function () {
//    return redirect('admin.admin');
//});