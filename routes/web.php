<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Route::get('/dashboard',function(){
//     return view('layout.admin');

// });

Route::get('categories',[CategoryController::class,'index']);
Route::get('add-category',[CategoryController::class,'add']);

Route::get('/products',[ProductController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Category

Route::post('/add-category',[CategoryController::class,'store'])->name('add_category');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', function () {
       return "this is admin";
    });
 
 });
