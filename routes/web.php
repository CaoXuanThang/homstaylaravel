<?php

use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\Marketing_bannerController;
use App\Http\Controllers\admin\New_categoryController;
use App\Http\Controllers\admin\NewController;
use App\Http\Controllers\admin\Real_estate_categoryController;
use App\Http\Controllers\admin\Real_estateController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);




Route::get('/admin',[MainController::class,'index'])->name('main');
Route::get('/admin/marketing_banner',[Marketing_bannerController::class,'index'])->name('marketing_banner');
Route::get('/admin/new',[NewController::class,'index'])->name('new');
Route::get('/admin/new_category',[New_categoryController::class,'index'])->name('new_category');
Route::get('/admin/real_estate',[Real_estateController::class,'index'])->name('real_estate');
Route::get('/admin/real_estate_category',[Real_estate_categoryController::class,'index'])->name('real_estate_category');