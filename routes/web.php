<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');


//

Route::get('/course', function () {
    return view('Course.index');
})->middleware(['auth', 'verified'])->name('course');

Route::get('/course/create', function () {
    return view('Course.create');
})->middleware(['auth', 'verified'])->name('course.create');

Route::get('/course/content', function () {
    return view('Course.content');
})->middleware(['auth', 'verified'])->name('course.content');


Route::get('/course/progress', function () {
    return view('Course.progress');
})->middleware(['auth', 'verified'])->name('course.progress');

//


Route::get('/contactUs', function () {
    return view('Contact Us.index');
})->middleware(['auth', 'verified'])->name('contactUs');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
