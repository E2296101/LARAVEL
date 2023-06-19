<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FichierController;


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
    return view('welcome');
});

Route::get('fichier', function () {
    return view('fichiers.index');
});

Route::get('forum', [ArticleController::class, 'index'])->name('forum.index')->middleware('auth');
Route::get('forum-create', [ArticleController::class, 'show'])->name('forum.create')->middleware('auth');
Route::post('forum-create', [ArticleController::class, 'store'])->middleware('auth');
Route::get('forum-delete/{articleId}', [ArticleController::class, 'destroy'])->middleware('auth');
Route::get('forum-edit/{articleId}', [ArticleController::class, 'edit'])->name('forum.edit')->middleware('auth');
Route::put('forum-edit/{articleId}', [ArticleController::class, 'update'])->middleware('auth');

Route::get('fichiers', [FichierController::class, 'index'])->name('fichiers.index')->middleware('auth');
Route::get('file-upload', [FichierController::class, 'showUploadForm'])->name('fichier.upload')->middleware('auth');

Route::get('user-create', [UserController::class, 'index'])->name('auth.create');
Route::post('user-create', [UserController::class, 'store']);


Route::post('etudiant-create', [EtudiantController::class, 'store']);
Route::get('etudiant-delete/{EtudiantId}', [EtudiantController::class, 'destroy']);
Route::get('etudiant-edit/{EtudiantId}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'authentification'])->name('login.authentification');
Route::get('deconnexion', [AuthController::class, 'deconnexion']);
Route::get('lang/{locale}', [LanguageController::class, 'index'])->name('lang');


