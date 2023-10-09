<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
       return view('front.home.employee');
   }
    public function attendance(Request $request)

    {
//        Category::createCategory($request);
//        return redirect()->back()->with('success','Category Created Successfully');
    }

    public function employeelist ()
    {

    }
}
