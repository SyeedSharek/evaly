<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupperAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;


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

// Route::get('/', function () {
//     return view('frondend.welcome');
// });

// Home Route.....................

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about_details']);
Route::get('/contact',[HomeController::class,'contact_details']);
Route::get('/view_product/{id}',[HomeController::class,'shopdetails']);
Route::get('/cat_by_id/{id}',[HomeController::class,'cat_by_product']);
Route::get('/subcat_by_id/{id}',[HomeController::class,'subcat_by_product']);


// Admin Route....................

Route::get('/admins',[AdminController::class,'login']);
Route::post('/show_deshboard',[AdminController::class,'deshboard_show']);



// Logout, Authentication SupperAdmin Controller
Route::get('/deshboard',[SupperAdminController::class,'deshboard']);
Route::get('/logout',[SupperAdminController::class,'logout']);


// Category Route.....................
Route::resource('/categories',CategoryController::class);
Route::get('/cat_status',[CategoryController::class,'cat_change']);

// Sub Category Route..................

Route::resource('/subcategories',SubCategoryController::class);


// Product Route..................

Route::resource('/products',ProductController::class);
Route::get('/subcat/{id}',[ProductController::class,'subcat_change']);




//Add Card.................
Route::post('/add_to_cart',[CartController::class,'cart_details']);

//Checkout Card.................
Route::get('/checkout',[CheckoutController::class,'index']);

Route::get('/delete_cart/{id}',[CheckoutController::class,'cart_delete']);

// Customer 
Route::get('/customer_login',[CustomerController::class,'index']);
Route::post('/login_check',[CustomerController::class,'login']);
Route::get('/register',[CustomerController::class,'new_register']);
Route::post('/create_customer',[CustomerController::class,'store']);
Route::get('/customer_logout',[CustomerController::class,'logout']);