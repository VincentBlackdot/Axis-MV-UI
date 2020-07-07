<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorsController extends Controller
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
    public function index()
<<<<<<< HEAD
    {
       return view('vendorsDb.index');
=======
    { 
        return view('vendorsDb.vendors');
        
>>>>>>> 620ec87dd3154a2fd9b66e9eaf12d1bf0d040d74
    }
}
