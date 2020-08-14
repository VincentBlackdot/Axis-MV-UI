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
Route::get('addproduct', 'ProductsController@AddProduct')->name('addproduct');

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





//LOGIN AND SIGN UP
//Route::get('')

//return redirect()->route('login');
//
//Route::get('vendorsProfile', function () {
//    return redirect('admin.admin');
//});


//VENDORS ROUTES
// sections//;
Route::get('sections', 'SectionController@VendorsDbsections')->name('sections');

//category routs
Route::get('categories', 'CategoryController@VendorsDbCategories')->name('categories');

//add-eddit-categoty rout
Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@VendorsDbaddEditCategory');
