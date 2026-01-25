<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\TeacherMiaddleware;
use App\Http\Middleware\StudentMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'landing']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::prefix('user')->controller(StudentController::class)->middleware('teacher')->group(function(){
//     Route::get('/','index');
// Route::get('/allteacher','show');
// });

// Route::prefix('teacher')->controller(TeacherController::class)->group(function(){
// Route::get('/','index');
// Route::get('/{id}','show');
// });

Route::prefix('/customer')->controller(CustomerController::class)->group(function(){
    Route::get('/','index');
    Route::view('/create','customer.insert');
    Route::post('/add','create');
});

Route::prefix('/product')->controller(ProductController::class)->group(function(){
    Route::get('/add','index');
    Route::post('/create','create');
});
// Route::get('/user',[StudentController::class,'index']);

require __DIR__.'/auth.php';
