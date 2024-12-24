<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zeina', [TestController::class, 'zeina']);

// Shorthand routes
/*
Route::view('/zeina', 'index');
Route::redirect('/here', 'https://google.com');
*/

Route::get('/print-name/{name?}', [TestController::class, 'printName'])->name('print-my-name-route');

// Routes groups
//Route::controller(TestController::class)->prefix('test')->name('test.')->group(function () {
//    Route::get('/zeina', 'zeina');
//    Route::get('/print-name/{name?}', 'printName')->name('print-my-name-route');
//});
