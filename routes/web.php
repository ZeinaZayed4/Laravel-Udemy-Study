<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIfNameIsZeina;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('zeina');
//});

//Route::get('/', function () {
//    $data = 'Zeina';
//   return view('posts.create.index.zeina', compact('data'));
//});

//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/zeina', [TestController::class, 'zeina']);

// Shorthand routes
/*
Route::view('/zeina', 'index');
Route::redirect('/here', 'https://google.com');
*/

//Route::get('/print-name/{name?}', [TestController::class, 'printName'])->name('print-my-name-route');

// Routes groups
//Route::controller(TestController::class)->prefix('test')->name('test.')
//    ->middleware('check_zeina')->group(function () {
//        Route::get('/zeina', 'zeina');
//        Route::get('/print-name/{name?}', 'printName')->name('print-my-name-route');
//});

//Route::get('/hello', [UserController::class, 'index']);

//Route::resource('posts', PostController::class);

// Middleware
//Route::get('/hello', SingleController::class)
//    ->middleware('check_zeina');

//Route::get('/hello', SingleController::class);

// Theme Routes
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
});
