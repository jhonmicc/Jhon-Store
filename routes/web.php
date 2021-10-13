<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\UserController;

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
// Di dalam HomeController ada yg namanya method index
Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/details/{id}', [DetailController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/success', [CartController::class, 'success']);

Route::get('/register/success', [RegisterController::class, 'success']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/products', [DashboardProductController::class, 'index']);
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create']);
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'detail']);

Route::get('/dashboard/transactions', [DashboardTransactionController::class, 'index']);
Route::get('/dashboard/transactions/{id}', [DashboardTransactionController::class, 'detail']);

Route::get('/dashboard/settings', [DashboardSettingController::class, 'store']);
Route::get('/dashboard/account', [DashboardSettingController::class, 'account']);

// ->middleware('auth','admin')
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index']);
    Route::resource('category', AdminCategoryController::class);
    Route::resource('user', UserController::class);
});

Auth::routes();
