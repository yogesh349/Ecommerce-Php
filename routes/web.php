<?php

use App\Http\Controllers\Admin\AdminOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeLayoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[HomeLayoutController::class,'index']);





// Route::get('/dashboard',function(){
//     return view('layout.admin');

// });



// Product
Route::get('/products',[ProductController::class,'index']);
Route::get('/form-product',[ProductController::class,'create']);
Route::post('/form-product',[ProductController::class,'store'])->name('add_product');
Route::get('product_details/{slug}/{id}',[HomeLayoutController::class,'product_details'])->name('prodcut_details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeLayoutController::class, 'index'])->name('home');



// Category

Route::get('/category',[HomeLayoutController::class,'category']);
Route::get('categories',[CategoryController::class,'index']);
Route::get('add-category',[CategoryController::class,'add']);
Route::post('/add-category',[CategoryController::class,'store'])->name('add_category');
Route::get('view-category/{slug}',[CategoryController::class,'viewCategoryProduct'])->name('view-category');


Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', function () {
       return view('admin.index');
    });

    Route::get('orders',[AdminOrderController::class,'index']);
    Route::get('AdminViewOrder/{id}',[AdminOrderController::class,'view'])->name('admin-viewOrder');
    Route::put('update-order/{id}',[AdminOrderController::class,'updateOrder'])->name('update-order');
    Route::get('order-history',[AdminOrderController::class,'orderHistory'])->name("order_history");
 
 });

// Cart



Route::middleware(['auth'])->group(function(){
    Route::get('/cart',[CartController::class,'index']);
    Route::post('add-to-cart',[CartController::class,'store']);
    Route::post('delete-cart-item',[CartController::class,'destroy']);
    Route::post('update-cart',[CartController::class,'edit']);
    Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');
    Route::post('place-order',[CheckoutController::class,'placeOrder'])->name('place-order');
    Route::get('my-orders',[OrderController::class,'index']);
    Route::get('view-order/{id}',[OrderController::class,'view'])->name('view-order_d');

    Route::get("wishlist",[WishlistController::class,'index']);
    Route::post("add-to-wish",[WishlistController::class,'add']);
 

});
