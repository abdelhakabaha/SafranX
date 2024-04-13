<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/header', function () {
    return view('header');
});

Route::get('/dashboard', function () {
    return view('DashboardAdmin');
});
Route::get('/creeProduit.', function () {
    return view('layoute.creeProduit');
});
Route::get('/dashboard', function () {
    return view('DashboardAdmin');
});

// Route::get('/DashboardAdmin',  [UserController::class, 'index'])->name('index');

Route::get('/dashboard', [UserController::class, 'index'])->name('dachboard.index');


// les Route de registration
Route::get('/register',  [AuthController::class, 'register'])->name('register');
Route::post('/register',  [AuthController::class, 'registerPost'])->name('register');

// les Route de login
Route::get('/login',  [AuthController::class, 'login'])->name('auth.login');
Route::post('/login',  [AuthController::class, 'loginPost'])->name('auth.login');
