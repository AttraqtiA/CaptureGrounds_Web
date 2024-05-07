<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// LOFERVER
Route::get('/projectList', [App\Http\Controllers\ProjectController::class, 'index'])->name('projectList.index');
Route::get('/projectList/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projectList.show');
