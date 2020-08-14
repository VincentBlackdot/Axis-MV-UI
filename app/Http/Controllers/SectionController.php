<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
class SectionController extends Controller
{
    public function VendorsDbsections()
    {
        $sections = section::get();
        return view('vendorsDb.sections.sections',['sections'=>$sections,]);
    }
}
