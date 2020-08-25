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


    public function FileManager()
    {
        return view('admin/adminpages.file-manager');

    }
    
    public function PasswordRecovery()
    { 
        return view('admin.adminpages.password-recovery');
        
    }

    public function AdminMailBox()
    { 
        return view('admin.adminpages.mail-box');
        
    }


    public function ComposeEmail()
    { 
        return view('admin.adminpages.email-compose');
        
    }
    public function AdminChats()
    { 
        return view('admin.adminpages.message-chat');
        
    }
    public function CalendarPage()
    { 
        return view('admin.adminpages.calendar');
        
    }

    public function AdminEmailDetails()
    { 
        return view('admin.adminpages.email-details');
        
    }

    public function AdminAccount()
    { 
        return view('admin.adminpages.admin-account');
        
    }
    public function AdminProfile()
    { 
        return view('admin.adminpages.profile');
        
    }
    public function PhotoSlide()
    { 
        return view('admin.adminpages.photo-slide');
        
    }


}
