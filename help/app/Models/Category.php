<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['attend','intime','outtime'];
    protected static $category;
    public static function createCategory($request)
    {
        self::$category = new Category();
        self::$category->attend = $request->attend;
        self::$category->intime = $request->intime;
        self::$category->outtime = $request->outtime;
        self::$category->save();
    }
    public static function updateCategory($request,$id)
    {
        self::$category=Category::find($id);
        self::$category->attend =$request->attend;
        self::$category->intime =$request->intime;
        self::$category->outtime =$request->outtime;
        self::$category->save();
    }
}
