<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EmployeelistController;

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/category-products', [HomeController::class,'categoryProducts'])->name('category-products');
Route::get('/details', [HomeController::class,'details'])->name('details');
Route::post('/attendance', [HomeController::class,'attendance'])->name('attendance.store');
Route::get('/attendance-list/{id}', [HomeController::class,'employeelist'])->name('attendance.list');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class,'create'])->name('category.add');
    Route::post('/new-category', [CategoryController::class,'store'])->name('category.store');
    Route::get('/manage-category', [CategoryController::class,'index'])->name('category.index');
    Route::get('/employee-list', [CategoryController::class,'employeelist'])->name('category.list');
    Route::get('/employee-attendance', [CategoryController::class,'attendance'])->name('category.attendance');
    Route::get('/employee-contact', [CategoryController::class,'contact'])->name('category.contact');
    Route::get('/employee-report', [CategoryController::class,'report'])->name('category.report');

   Route::get('/edit-category/{id}', [CategoryController::class,'edit'])->name('category.edit');
   Route::post('/update-category/{id}', [CategoryController::class,'update'])->name('category.update');
  Route::get('/delete-category/{id}', [CategoryController::class,'destroy'])->name('category.delete');
//
//    Route::post('/list-category', [CategoryController::class,'list'])->name('category.list');
//    Route::post('/attendance-category', [CategoryController::class,'attendance'])->name('category.attendance');
//    Route::post('/filter-category', [CategoryController::class,'filter'])->name('category.filter');


});
