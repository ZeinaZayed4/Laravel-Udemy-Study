<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Users\UserController;
use App\Http\Middleware\CheckIfNameIsZeina;
use Illuminate\Support\Facades\Route;

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
Route::controller(TestController::class)->prefix('test')->name('test.')
    ->middleware('check_zeina')->group(function () {
        Route::get('/zeina', 'zeina');
        Route::get('/print-name/{name?}', 'printName')->name('print-my-name-route');
});

//Route::get('/hello', [UserController::class, 'index']);

//Route::resource('posts', PostController::class)->only(['index', 'show']);

// Middleware
//Route::get('/hello', SingleController::class)
//    ->middleware('check_zeina');

Route::get('/hello', SingleController::class);
