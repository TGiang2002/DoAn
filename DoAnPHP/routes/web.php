<?php

use App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Front\HomeController::class,'index']);

Route::get('/shop/product/{id}', [\App\Http\Controllers\Front\ShopController::class,'show']);
Route::post('/shop/product/{id}', [\App\Http\Controllers\Front\ShopController::class,'postComment']);
Route::get('/shop', [\App\Http\Controllers\Front\ShopController::class,'index']);
Route::get('/shop/{categoryName}', [\App\Http\Controllers\Front\ShopController::class,'category']);

Route::get('/cart/add/{id}', [\App\Http\Controllers\Front\CartController::class,'add']);
Route::get('/cart', [\App\Http\Controllers\Front\CartController::class,'index']);
Route::get('/cart/delete/{rowid}', [\App\Http\Controllers\Front\CartController::class,'delete']);
Route::get('/cart/deleteAll', [\App\Http\Controllers\Front\CartController::class,'deleteAll']);


Route::get('/checkout', [\App\Http\Controllers\Front\CheckOutController::class,'index']);
Route::post('/checkout', [\App\Http\Controllers\Front\CheckOutController::class,'addOrder']);
Route::post('/checkout/result', [\App\Http\Controllers\Front\CheckOutController::class,'result']);


Route::get('/login', [\App\Http\Controllers\Front\LoginController::class,'login']);
Route::post('/login', [\App\Http\Controllers\Front\LoginController::class,'store']);

Route::get('/register', [\App\Http\Controllers\Front\LoginController::class,'register']);
Route::post('/register', [\App\Http\Controllers\Front\LoginController::class,'postRegister']);

Route::get('/blog', [\App\Http\Controllers\Front\BlogController::class,'index']);
Route::get('/blog/detail/{id}', [\App\Http\Controllers\Front\BlogController::class,'detail']);


Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class,'index']);


Route::get('/TrangAdmin', [\App\Http\Controllers\Admin\DashboardController::class,'index']);
Route::get('/TrangAdmin/login', [\App\Http\Controllers\Admin\DashboardController::class,'login']);
Route::post('/TrangAdmin/login', [\App\Http\Controllers\Admin\DashboardController::class,'postLogin']);


Route::get('/TrangAdmin/category', [\App\Http\Controllers\Admin\CategoryController::class,'index']);
Route::get('/TrangAdmin/category/create', [\App\Http\Controllers\Admin\CategoryController::class,'create']);
Route::post('/TrangAdmin/category/create', [\App\Http\Controllers\Admin\CategoryControllerr::class,'store']);
Route::get('/TrangAdmin/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit']);
Route::post('/TrangAdmin/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update']);
Route::get('/TrangAdmin/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'delete']);


Route::get('/TrangAdmin/brand', [\App\Http\Controllers\Admin\BrandController::class,'index']);
Route::get('/TrangAdmin/brand/create', [\App\Http\Controllers\Admin\BrandController::class,'create']);
Route::post('/TrangAdmin/brand/create', [\App\Http\Controllers\Admin\BrandController::class,'store']);
Route::get('/TrangAdmin/brand/edit/{id}', [\App\Http\Controllers\Admin\BrandController::class,'edit']);
Route::post('/TrangAdmin/brand/edit/{id}', [\App\Http\Controllers\Admin\BrandController::class,'update']);
Route::get('/TrangAdmin/brand/delete/{id}', [\App\Http\Controllers\Admin\BrandController::class,'delete']);






