<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private  $category;
public function create()
{
    return view('backend.category.create');
}
public function store(Request $request )
{
  Category::createCategory($request);
  return redirect()->back()->with('success','Employee Added Successfully');
}
public function index()
{
    return view ('backend.category.index',[
        'categories' =>Category::all()
    ]);
}
public function employeelist()
{
    return view ('backend.category.employeelist',[
        'categories' =>Category::all()
    ]);
}

public function attendance()
{
    return view ('backend.category.attendance',[
        'categories' =>Category::all()
    ]);
}
public function contact()
    {
        return view ('backend.category.contact',[
            'categories' =>Category::all()
        ]);
    }
    public function report()
    {
        return view ('backend.category.report',[
            'categories' =>Category::all()
        ]);
    }



    public function edit($id)
{
   $this->category =Category::find($id);
    return view('backend.category.edit',['category' => $this->category]);
}
public function update(Request $request,$id)
{
Category::updatecategory($request,$id);
return redirect()->route('category.index')->with('success','Employee updated successfully.');
}
public function destroy($id)
{
    Category::find($id)->delete();
    return redirect()->back()->with('success','Employee Deleted successfully');
}
}
