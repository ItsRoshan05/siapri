<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsersController;

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

// Halaman Utama
Route::get('/', function () {
    return view('home'); // Mengganti dengan halaman utama yang baru
})->name('home');

// Dashboard Admin
Route::get('/dashboard', [TransaksiController::class, 'index'])
    ->middleware('auth') // Middleware untuk otentikasi
    ->name('dashboard');

// Daftar Transaksi
Route::get('/transaksi', [TransaksiController::class, 'daftar'])
    ->middleware('auth') // Middleware untuk otentikasi
    ->name('transaksi');
    Route::resource('transaksi', TransaksiController::class);    
    

// Analisis Apriori
Route::get('/analisis', [TransaksiController::class, 'analisis'])
    ->middleware('auth') // Middleware untuk otentikasi
    ->name('analisis');

// Formulir Pendaftaran Pengguna
Route::get('/register', [AuthController::class, 'showRegistrationForm'])
    ->name('register');
Route::post('/register', [AuthController::class, 'register'])
    ->name('register.post');



Route::resource('users',UsersController::class)->middleware('auth');
    
// Formulir Login Pengguna
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post');

// Logout Pengguna
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');
