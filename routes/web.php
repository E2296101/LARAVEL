<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;


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

Route::get('liste-etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::get('user-create', [UserController::class, 'index'])->name('auth.create');
Route::post('user-create', [UserController::class, 'store']);


Route::post('etudiant-create', [EtudiantController::class, 'store']);
Route::get('etudiant-delete/{EtudiantId}', [EtudiantController::class, 'destroy']);
Route::get('etudiant-edit/{EtudiantId}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('lang/{locale}', [LanguageController::class, 'index'])->name('lang');


