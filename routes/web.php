<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProduitsController;

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
})->name('home');

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
Route::get('/dashboard.ArticleDachbord',  [ArticlController::class, 'index'])->name('dashboard.ArticleDachbord');
Route::get('/dashboard.produitDachbord',  [ProduitsController::class, 'index'])->name('dashboard.produitDachbord');



//Create Route
Route::get('/articles/create', [ArticlController::class, 'create'])->name('layoute.creeArticle');
Route::post('/articles/create', [ArticlController::class, 'store'])->name('layoute.creeArticle');
// Update route
Route::get('/articles/update', [ArticlController::class, 'edit'])->name('layoute.updateArticle');
Route::post('/articles/update', [ArticlController::class, 'update'])->name('layoute.update');



// les Route de registration
Route::get('/register',  [AuthController::class, 'register'])->name('register');
Route::post('/register',  [AuthController::class, 'registerPost'])->name('register');

// les Route de login
Route::get('/login',  [AuthController::class, 'login'])->name('auth.login');
Route::post('/login',  [AuthController::class, 'loginPost'])->name('auth.login');

