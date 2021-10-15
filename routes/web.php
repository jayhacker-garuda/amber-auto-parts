<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Seller\SellerController;
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

// Non-Auth Routes
Route::get('/', [MainController::class, 'index'])->name('home');


// Auth Routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login/user', [LoginController::class, 'loginUser'])->name('auth.loginUser');
Route::post('/register/user', [RegisterController::class, 'registerUser'])->name('auth.RegisterUser');



// Admin Routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

// Seller Routes
Route::get('/seller-dashboard', [SellerController::class, 'index'])->name('seller.dashboard');