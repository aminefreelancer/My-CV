<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CategoryController;

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
    return view('home');
})->name('home');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'create'])->name('dashboard');
Route::post('/dashboard', [HomeController::class, 'update'])->name('updateDashboard');

Route::get('/categories', [CategoryController::class, 'create'])->name('categories');
Route::post('/categories', [CategoryController::class, 'store'])->name('newCategory');

Route::get('/skills', [SkillController::class, 'create'])->name('skills');