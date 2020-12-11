<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductCategoryController;

use App\Http\Controllers\ProductController;
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

Route::get('/', [\App\Http\Controllers\ProductHomeController::class,'show'])->name('/');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [OrderController::class, 'index'])->name('order_by_user');
    Route::get('/checkout', function () {
        return view('checkout');
    });
    Route::post('/addItem', [OrderController::class, 'create'])->name('add_item');
    Route::post('/addToCart',[OrderController::class, 'store'])->name('add_to_cart');
    Route::delete('/deleteItem', [OrderController::class, 'destroy'])->name('del_item');
    Route::post('/updateItem', [OrderController::class, 'update'])->name('update_item');
    Route::post('/searchItemName', [ProductController::class, 'getItemName'])->name('search_item_name');
//    Route::get('/dashboard', [DashboardController::class, 'getAllProducts'])->name('dashboardProducts');
    Route::get('/history-order', [DashboardController::class, 'getAllOrder'])->name('dashboardOrders');
    Route::get('/addProduct', [ProductController::class, 'create'])->name('add_product');
});

Route::get('/product-detail/{id}', 'ProductController@getProduct')->name('product-detail');
Route::get('products/{category_id}',[ProductCategoryController::class, 'show']);
Route::get('/search-product', [ProductController::class, 'searchByName'])->name('search_product');

Route::group(['middleware' => ['auth', 'isadmin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'getAllProducts'])->name('dashboardProducts');
});
