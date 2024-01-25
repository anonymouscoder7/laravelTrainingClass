<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StudentController;
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



Route::get('/', [FrontendController::class, 'index']);
// Route::get('/about', [FrontendController::class, 'about']);
// Route::get('/contact', [FrontendController::class, 'contact']);


Route::get('/about/{data}', [FrontendController::class, 'aboutDetails']);

Route::get('/delete/{id}', [StudentController::class, 'destroy']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);

Route::post('/update/{id}', [StudentController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/save', [StudentController::class, 'store']);

Route::group(['middleware' => 'admin'], function () {

    // admin route
    Route::get('/about', [FrontendController::class, 'about']);
});

Route::group(['middleware' => 'user'], function () {

    // user route
    Route::get('/contact', [FrontendController::class, 'contact']);
});
