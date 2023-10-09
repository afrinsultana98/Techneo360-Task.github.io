<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', [HomeController::class,'home'])->name('home');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class,'create'])->name('category.add');
    Route::post('/new-category', [CategoryController::class,'store'])->name('category.store');
    Route::get('/attendance-category', [CategoryController::class,'attendance'])->name('category.attendance');
    Route::get('/report-category', [CategoryController::class,'report'])->name('category.report');
});
