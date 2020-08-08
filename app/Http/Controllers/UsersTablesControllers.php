<?php
namespace App\Http\Controllers;

use DB;
use App\Quotation;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersTablesControllers extends Controller
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
     */

    public function UsersTables()
    {$users = DB::table('users')->select('id','name','email','phone','city')->get();
        return view('admin.usersTables')->with('users',$users);


    }
    public function index()
    {
        return view('admin.usersTables');

    }

    public function UsersTablesEdit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);

    }
    public function UserEditUpdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->city = $request->input('city'); 
        $users->update();
        return redirect('/usersTables')->with('status', 'Your data has been Updated');

    }
}
