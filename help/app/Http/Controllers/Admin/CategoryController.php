<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.category.create');
    }
public function store(Request $request )
{
  Category::createCategory($request);
  return redirect()->back()->with('success','Welcome to your Shine life');
}
    public function attendance()
    {
        return view ('backend.category.attendance',[
            'categories' =>Category::all()
        ]);
    }
    public function report()
    {
        return view ('backend.category.report',[
            'categories' =>Category::all()
        ]);
    }
}
