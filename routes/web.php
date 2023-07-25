<?php

use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\Marketing_bannerController;
use App\Http\Controllers\admin\New_categoryController;
use App\Http\Controllers\admin\NewController;
use App\Http\Controllers\admin\Real_estate_categoryController;
use App\Http\Controllers\admin\Real_estateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product_real_estateController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product',[Product_real_estateController::class,'index'])->name('product');
Route::get('/product/{id}',[Product_real_estateController::class,'property'])->name('property');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', [MainController::class, 'index'])->name('main');

    // real_estate_category
    Route::get('/real_estate_category', [Real_estate_categoryController::class, 'index'])->name('real_estate_category.list');
    Route::get('/real_estate_category/create', [Real_estate_categoryController::class, 'show'])->name('real_estate_category.show');
    Route::post('/real_estate_category/create', [Real_estate_categoryController::class, 'create'])->name('real_estate_category.create');
    Route::get('/real_estate_category/update/{id}', [Real_estate_categoryController::class, 'showupdate'])->name('real_estate_category.showupdate');
    Route::post('/real_estate_category/update/{id}', [Real_estate_categoryController::class, 'update'])->name('real_estate_category.update');
    Route::get('/real_estate_category/delete/{id}', [Real_estate_categoryController::class, 'delete'])->name('real_estate_category.delete');


    // new_category
    Route::get('/new_category', [New_categoryController::class, 'index'])->name('new_category.list');
    Route::get('/new_category/create', [New_categoryController::class, 'show'])->name('new_category.show');
    Route::post('/new_category/create', [New_categoryController::class, 'create'])->name('new_category.create');
    Route::get('/new_category/update/{id}', [New_categoryController::class, 'showupdate'])->name('new_category.showupdate');
    Route::post('/new_category/update/{id}', [New_categoryController::class, 'update'])->name('new_category.update');
    Route::get('/new_category/delete/{id}', [New_categoryController::class, 'delete'])->name('new_category.delete');

    // real_estate 
    Route::get('/real_estate', [Real_estateController::class, 'index'])->name('real_estate.list');
    Route::get('/real_estate/create', [Real_estateController::class, 'show'])->name('real_estate.show');
    Route::post('/real_estate/create', [Real_estateController::class, 'create'])->name('real_estate.create');
    Route::get('/real_estate/update/{id}', [Real_estateController::class, 'showupdate'])->name('real_estate.showupdate');
    Route::post('/real_estate/update/{id}', [Real_estateController::class, 'update'])->name('real_estate.update');
    Route::get('/real_estate/delete/{id}', [Real_estateController::class, 'delete'])->name('real_estate.delete');

    // new 
    Route::get('/new', [NewController::class, 'index'])->name('new.list');
    Route::get('/new/create', [NewController::class, 'show'])->name('new.show');
    Route::post('/new/create', [NewController::class, 'create'])->name('new.create');
    Route::get('/new/update/{id}', [NewController::class, 'showupdate'])->name('new.showupdate');
    Route::post('/new/update/{id}', [NewController::class, 'update'])->name('new.update');
    Route::get('/new/delete/{id}', [NewController::class, 'delete'])->name('new.delete');

    Route::get('/marketing_banner', [Marketing_bannerController::class, 'index'])->name('marketing_banner');
});





// login register logout

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
