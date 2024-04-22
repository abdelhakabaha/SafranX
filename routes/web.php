<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProduitsController;
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
})->name('home');

Route::get('/home', function () {
    return view('home');
});
Route::get('/ztest', function () {
    return view('z');
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



//les Route de Dashboards d'admin (CRUD des article , produit et category).
Route::get('/dashboard', [UserController::class, 'index'])->name('dachboard.index');
Route::get('/dashboard.ArticleDachbord',  [ArticlController::class, 'index'])->name('dashboard.ArticleDachbord');
Route::get('/ztest',  [ArticlController::class, 'articleHome'])->name('ztest');


Route::get('/dashboard.produitDachbord',  [ProduitsController::class, 'index'])->name('dashboard.produitDachbord');
Route::get('/dashboard.CategoryDachbord',  [CategoryController::class, 'index'])->name('dashboard.CategoryDachbord');


//Les Routes pour la liste des Categories
Route::get('/Category/create',  [CategoryController::class, 'create'])->name('layoute.creeCategory');
Route::post('/Category/create',  [CategoryController::class, 'store'])->name('layoute.creeCategory');
// Les Route pour Modification des articles.
Route::get('/category/update', [ArticlController::class, 'edit'])->name('layoute.updateCategory');
Route::post('/category/update', [ArticlController::class, 'update'])->name('layoute.update');
//Les Route pour la suppression d'une article
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('layoute.deleteCategory');



//Les Route pour la Création des article. 
Route::get('/articles/create', [ArticlController::class, 'create'])->name('layoute.creeArticle');
Route::post('/articles/create', [ArticlController::class, 'store'])->name('layoute.creeArticle');
//Les Route pour Modification des articles.
Route::get('/articles/edite/{id}', [ArticlController::class, 'edit'])->name('layoute.updateArticle');
Route::post('/articles/update/{id}', [ArticlController::class, 'update'])->name('layoute.update');
//Les Route pour la visialisation dedétaille d'une article
Route::get('/articles/voireArticle', [ArticlController::class, 'voireArticle'])->name('layoute.voireArticle');
//Les Route pour les détaille de l'article d'une article
Route::get('/articles/articleDetaille/{id}', [ArticlController::class, 'articleDetaille'])->name('articleDetaille');
//Les Route pour la suppression d'une article
Route::get('/articles/voireArticle/{id}', [ArticlController::class, 'destroy'])->name('layoute.deleteArticle');

//Les Route pour la création des Produit 
Route::get('/produit/create', [ArticlController::class, 'create'])->name('layoute.creeProduit');
Route::get('/produit/create', [ArticlController::class, 'store'])->name('layoute.creeProduit');
// Les Route pour Modification des Produit 






// Les Route de registration.
Route::get('/register',  [AuthController::class, 'register'])->name('register');
Route::post('/register',  [AuthController::class, 'registerPost'])->name('register');


// Les Route de login.
Route::get('/login',  [AuthController::class, 'login'])->name('auth.login');
Route::post('/login',  [AuthController::class, 'loginPost'])->name('auth.login');

