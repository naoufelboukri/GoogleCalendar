<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('/create', [HomeController::class , 'create'])->name('create');
Route::post('/create', [HomeController::class , 'store'])->name('store');
Route::get('/source', [HomeController::class , 'source'])->name('source');

