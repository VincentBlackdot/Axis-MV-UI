<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     */

    public function index()
    {$users = DB::table('users')->select('id','name','email','phone')->get();
        return view('admin.admin')->with('users',$users);


    }
    public function UsersTable()
    {
        return view('admin.users-table');

    }

}
