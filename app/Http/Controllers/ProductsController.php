<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function index(){
    $products = DB::table('products')->get();

    return view("allproducts",compact("products"));
    }
    public function AddProduct()
    {
        return view('vendorsDb/addproduct');

    }
}
