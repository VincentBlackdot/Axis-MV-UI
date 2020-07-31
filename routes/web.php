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
    return view('indexHome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'AdminController@index')->name('admin');

Route::get('admin.usersProfile', 'UsersController@index')->name('admin.usersProfile');
    //->name('usersProfile');;

Route::get('admin.vendorsProfile', 'VendorsController@index')->name('admin.vendorsProfile');
    //->name('VendorsProfile');;

Route::resource('/admin/users', 'Admin\UsersControllers', ['except' => ['show', 'store']]);

//Route::get('/',function (){
//    $users = DB::table('users')->select('id','name','email')->get();
//    return view('admin.admin', compact('users'));
//});
/*
Route::get('/users/', function(){
    return view('usersdb.users');
});
Route::get('/vendors', function(){
    return view('vendorsDb.vendors');
});


Route::resource('posts','PostsController');
    Route::get('/posts/{code}', [ 'as'=>'post-show', 'uses'=>'PostsController@show']);
*/