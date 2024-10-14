<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CssFormController;
use App\Http\Controllers\JavaScriptController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HtmlController;

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


Route::get('/course/html', function () {
    return view('Course.html');
})->middleware(['auth', 'verified'])->name('course.html');


Route::get('/course/css', function () {
    return view('Course.css');
})->middleware(['auth', 'verified'])->name('course.css');


Route::get('/course/javascript', function () {
    return view('Course.javascript');
})->middleware(['auth', 'verified'])->name('course.javascript');


Route::get('/course/quiz', function () {
    return view('Course.quiz');
})->middleware(['auth', 'verified'])->name('course.quiz');



//


Route::get('/contactUs', function () {
    return view('Contact Us.index');
})->middleware(['auth', 'verified'])->name('contactUs');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

//Route::get('/course/progress', function () {
//    return view('Course.progress');
//})->middleware(['auth', 'verified'])->name('course.progress');

Route::get('/course/progress', [ProgressController::class, 'getResults']);

Route::post('/course', [HtmlController::class, 'courseCreate']);

Route::post('/cssForm', [CssFormController::class, 'courseCreate']);

Route::post('/JsForm', [JavaScriptController::class, 'courseCreate']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
