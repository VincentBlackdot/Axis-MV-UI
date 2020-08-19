<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function VendorsDbcategories(){
        $categories = Category::get();
        //return view('vendorsDb.categories.categories')->with(compact())
        return view('vendorsDb.categories.categories',['categories'=>$categories,]);
    }
    public function addEditCategory(Request $request, $id=null){
        if ($id==""){
            $title="Add Category";
            //add category functionality innocent

        }else{
            $title = "Edit Category";
           //edit category functionality innocent
        }
      // return view('vendorsDb.categories.add_edit_category')->with(compact(title));
        return view('vendorsDb.categories.add_edit_category',['Categories'=>$title,]);
    
    }
}

  