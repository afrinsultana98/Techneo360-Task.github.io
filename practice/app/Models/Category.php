<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','status','fullname','email','address','image'];
    protected static $category;
    protected static $imageFile,$imageName,$imageDirectory,$imageUrl;
    public static function createCategory($request)
    {
        self::$imageFile = $request->file('image');
        self::$imageName =time().rand(10,1000).self::$imageFile->getClientOriginalName();
        self::$imageDirectory ='assets/img/upload/';
        self::$imageFile->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;



        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->fullname = $request->fullname;
        self::$category->status = $request->status;
        self::$category->email = $request->email;
        self::$category->address = $request->address;
        self::$category->image = self::$imageUrl;
        self::$category->save();
    }
    public static function updateCategory($request,$id)
    {
        self::$category=Category::find($id);
        self::$category->name =$request->name;
        self::$category->fullname =$request->fullname;
        self::$category->status =$request->status;
        self::$category->email =$request->email;
        self::$category->address =$request->address;
        self::$category->save();
    }
}
