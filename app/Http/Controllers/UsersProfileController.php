<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UsersProfileController extends Controller
{
    /***
     * @return void
     */
public function  __construct()
{
    $this->middleware('auth');
}

    /**
     * @return \illuminate\Contracts\Supports\Renderable
     */
    public function index()
    {
        return view('usersdb.users');

    }
}
