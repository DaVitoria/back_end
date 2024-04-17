<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CourseController};
use App\Http\Controllers\{HomeController};
use App\Http\Controllers\Admin\{AuthController, UserController, RegisterController};
use App\Http\Controllers\{InscriptionController};
use App\Http\Controllers\{UsercController};


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
});

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/courses', [CourseController::class, 'store'])->name('course.store');
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('course.destroy');

Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription.index');
Route::post('/inscription',[ InscriptionController::class,'store'])->name('inscription.store');
Route::get('/inscription/{id}',[InscriptionController::class,'destroy'])->name('inscription.destroy');


Route::get('/', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [RegisterController::class, 'getRegister'])->name('getRegister');
Route::post('/register', [RegisterController::class, 'postRegister'])->name('postRegister');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create',[ UserController::class,'create'])->name('user.create');
Route::post('/user',[ UserController::class,'store'])->name('user.store');

Route::get('/users', [UsercController::class, 'index'])->name('users.index');
Route::get('/users/create',[ UsercController::class,'create'])->name('users.create');
Route::post('/users',[ UsercController::class,'store'])->name('users.store');
Route::get('/users/{id}/edit',[UsercController::class,'edit'])->name('users.edit');
Route::put('/users/{id}',[UsercController::class,'update'])->name('users.update');
Route::get('/users/{id}',[UsercController::class,'show'])->name('user.show ');
Route::delete('/users/{id}',[UsercController::class,'destroy'])->name('users.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
