<?php

use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExperienceController;

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
    $user = User::find(1);
    $categories = Category::all();
    return view('home', ['user' => $user, 'categories' => $categories]);
})->name('home');

Route::get('/contact', function () {
    $user = User::find(1);
    return view('contact', ['user' => $user]);
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('send');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'show'])->name('dashboard');
Route::post('/dashboard', [HomeController::class, 'update'])->name('updateDashboard');

Route::get('/socials', [SocialController::class, 'show'])->name('socials');
Route::post('/socials', [SocialController::class, 'store'])->name('newSocial');
Route::put('/socials/{social}', [SocialController::class, 'update'])->name('updateSocial');
Route::delete('/socials/{social}', [SocialController::class, 'destroy'])->name('deleteSocial');

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

Route::get('/experiences/{type}', [ExperienceController::class, 'show'])->name('experiences');
Route::get('/experiences/new/{type}', [ExperienceController::class, 'create'])->name('createExperience');
Route::post('/experiences/new', [ExperienceController::class, 'store'])->name('newExperience');
Route::get('/experiences/edit/{experience}', [ExperienceController::class, 'edit'])->name('editExperience');
Route::put('/experiences/update/{experience}', [ExperienceController::class, 'update'])->name('updateExperience');
Route::delete('/experiences/{experience}', [ExperienceController::class, 'destroy'])->name('deleteExperience');