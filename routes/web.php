<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
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
    return view('home');
})->name('home');

Route::get('/test', function () {
    return view('test');
});
Route::get('/panier', [CommandeController::class, 'index'])->name('panier');


Route::get('/dashboard', function () {
    return view('DashboardAdmin');
});
Route::get('/creeProduit.', function () {
    return view('layoute.creeProduit');
});
Route::get('/dashboard', function () {
    return view('DashboardAdmin');
});


Route::post('/cartStore/{id}', [CommandeController::class,'store'])->name('cartStore');
Route::get('/getCart/{id}', [CommandeController::class,'index'])->name('getCart');

// Route::get('/DashboardAdmin',  [UserController::class, 'index'])->name('index');



//les Route de Dashboards d'admin (CRUD des article , produit et category).
Route::get('/dashboard', [UserController::class, 'index'])->name('dachboard.index');
Route::get('/dashboard.ArticleDachbord',  [ArticlController::class, 'index'])->name('dashboard.ArticleDachbord');
Route::get('/',  [ArticlController::class, 'articleHome'])->name('home');
Route::get('/home',  [ProduitsController::class, 'produitsHome'])->name('productPage');


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
//Les Route pour la recherche des articles
Route::get('/search',[ArticlController::class,'search'])->name('article.search');
Route::get('/searchProduits',[ProduitsController::class,'searchProduits'])->name('produits.search');


//Les Route pour la création des Produit 
Route::get('/produit/create', [produitsController::class, 'create'])->name('layoute.creeProduit');
Route::post('/produit/store', [produitsController::class, 'store'])->name('post.creeProduit');
// Les Route pour Modification des Produit
Route::get('produits/edit/{id}',[produitsController::class,'edit'])->name('layoute.editProduit');
Route::put('/produits/update/{id}', [produitsController::class, 'update'])
->name('layoute.updateproduit');

// Les Route pour Supprition des Produit
Route::get('/produit/delete/{id}', [produitsController::class, 'destroy'])->name('layoute.deleteProduit');








// Les Route de registration.
Route::get('/register',  [AuthController::class, 'register'])->name('register');
Route::post('/register',  [AuthController::class, 'registerPost'])->name('register');


// Les Route de login.
Route::get('/login',  [AuthController::class, 'login'])->name('auth.login');
Route::post('/login',  [AuthController::class, 'loginPost'])->name('auth.login');

