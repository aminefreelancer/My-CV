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

Route::get('/dashboard', [HomeController::class, 'show'])->name('dashboard');
Route::post('/dashboard', [HomeController::class, 'update'])->name('updateDashboard');

Route::get('/categories', [CategoryController::class, 'create'])->name('categories');
Route::post('/categories', [CategoryController::class, 'store'])->name('newCategory');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('updateCategory');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('deleteCategory');

Route::get('/skills', [SkillController::class, 'show'])->name('skills');
Route::get('/skills/new', [SkillController::class, 'create'])->name('createSkill');
Route::post('/skills/new', [SkillController::class, 'store'])->name('newSkill');
Route::get('/skills/edit/{skill}', [SkillController::class, 'edit'])->name('editSkill');
Route::put('/skills/update/{skill}', [SkillController::class, 'update'])->name('updateSkill');
Route::delete('/skills/{skill}', [SkillController::class, 'destroy'])->name('deleteSkill');