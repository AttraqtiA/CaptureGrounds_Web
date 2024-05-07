<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MessageController;


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

//====================================== BISA DIAKSES SEMUA ROLE ======================================
Route::get('/', function () {
    return view('hire_option');
})->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat', [App\Http\Controllers\MessageController::class, 'chat_page'])->name('chatPage');

Route::post('/pm', [App\Http\Controllers\MessageController::class, 'store'])->name('postMessage');

// <p>
// <a href="{{ route('profile') }}"
// class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-400"
// role="menuitem">Profile</a>
// </p>
//=====================================================================================================


//=================================== BISA DIAKSES ROLE ADMIN SAJA ===================================
Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {

});
//=====================================================================================================


//=================================== BISA DIAKSES ROLE WORKER SAJA ===================================
Route::group([
    'middleware' => 'worker',
    'prefix' => 'worker',
    'as' => 'worker.'
], function () {

});
//=====================================================================================================


//=================================== BISA DIAKSES ROLE CUSTOMER SAJA ===================================
Route::group([
    'middleware' => 'customer',
    'prefix' => 'customer',
    'as' => 'customer.'
], function () {

});
//=====================================================================================================

Auth::routes();
