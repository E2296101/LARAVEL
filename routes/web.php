<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bitBankController;

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

// routes pour bitBank
Route::get('/index', 
[bitBankController::class, 'index']);
Route::get('/pricing', 
[bitBankController::class, 'pricing']);
Route::get('/faq', 
[bitBankController::class, 'faq']);
Route::get('/contact', 
[bitBankController::class, 'contact']);
Route::post('/contact', 
[bitBankController::class, 'contactForm']);
Route::get('/login', 
[bitBankController::class, 'login']);
Route::post('/login', 
[bitBankController::class, 'loginForm']);


