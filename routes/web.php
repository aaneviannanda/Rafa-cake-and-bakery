<?php

use Illuminate\Support\Facades\Route;

//Guest Controller
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Client Controller
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DashboardClientController;
use App\Http\Controllers\Client\FavoriteController;
use App\Http\Controllers\Client\ProductController;

// Admin Controller
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\DashboardProductController;
use App\Http\Controllers\Admin\DashboardCategoryController;


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

Route::get('/', [HomeController::class, 'viewIndex'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('product_detail');

Auth::routes();

Route::group(['client' => 'Dashboard', 'middleware' => ['auth:web','isClient'], 'prefix' => '/'], function () {
    Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite');
    Route::post('/favorite/insert', [FavoriteController::class, 'insert'])->name('insert_favorite');
    Route::post('/favorite/delete/{id}', [FavoriteController::class, 'delete'])->name('delete_favorite');
});

Route::group(['admin' => 'Dashboard', 'middleware' => ['auth:web','isAdmin'], 'prefix' => 'admin'], function () {
    Route::get('/', [DashboardAdminController::class, 'indexDashboardAdmin'])->name('adminHome');
    Route::get('/products', [DashboardProductController::class, 'index'])->name('products');
    Route::get('/categories', [DashboardCategoryController::class, 'index'])->name('categories');

    // Categories Handler Routes
    Route::post('/categories/insert', [DashboardCategoryController::class, 'add_category'])->name('insert_category');
    Route::post('/categories/update/{id}', [DashboardCategoryController::class, 'update_category'])->name('update_category');
    Route::post('/categories/delete/{id}', [DashboardCategoryController::class, 'delete_category'])->name('delete_category');

    // Products Handler Routes
    Route::post('/products/insert', [DashboardProductController::class, 'add_product'])->name('insert_product');
    Route::post('/products/update/{id}', [DashboardProductController::class, 'update_product'])->name('update_product');
    Route::post('/products/delete/{id}', [DashboardProductController::class, 'delete_product'])->name('delete_product');
});
