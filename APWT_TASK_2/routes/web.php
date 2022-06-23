<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
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

Route::get('/login',[loginController::class, 'Login'])->name('Login');
Route::post('/login',[loginController::class, 'loginSubmitted'])->name('Login');

Route::get('/registration',[loginController::class, 'CustReg'])->name('Registration');
Route::post('/registration',[loginController::class, 'CustRegSubmitted'])->name('Registration');

Route::get('/contact',[loginController::class, 'Contact'])->name('Contact');