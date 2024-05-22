<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Worker_profileController;


use App\Http\Controllers\Customer_profileController;




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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// LOFERVER
Route::get('/projectList', [App\Http\Controllers\ProjectController::class, 'index'])->name('projectList.index');
Route::get('/projectList/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projectList.show');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/chat/{id}', [MessageController::class, 'chat_page'])->middleware('auth')->name('chatPage');
Route::get('/homeToChat', [MessageController::class, 'home_to_chat'])->middleware('auth')->name('HomeToChat');
Route::post('/pm', [MessageController::class, 'store'])->name('postMessage');
Route::get('/dashboard', [Worker_profileController::class, 'dashboard'])->name('dashboard');

// Milik customer
Route::get('/create_service',[ServiceController::class,'create'])->name('create_service');
Route::post('/service_store',[ServiceController::class,'store'])->name('service_store');
Route::get('/edit/{service}', [ServiceController::class,'edit'])->name('edit_service');
Route::put('/update/{service}', [ServiceController::class,'update'])->name('service_update');
Route::delete('/service_destroy/{service}',[ServiceController::class,'destroy'])->name('service_destroy');

// Milik customer
Route::get('/hire', function () {
    return view('Hire.hire_option');
})->name('hireOption');

Route::get('/hiredetail_dummy', function () {
    return view('Hire.hire_detail');
})->name('hireDummy');

Route::get('/hirecheckout_dummy', function () {
    return view('Hire.hire_checkout');
})->name('hireCheckout');

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
    Route::get('/WorkerHomePage', [App\Http\Controllers\Worker_profileController::class, 'index']);
});
//=====================================================================================================


//=================================== BISA DIAKSES ROLE CUSTOMER SAJA ===================================
Route::group([
    'middleware' => 'customer',
    'prefix' => 'customer',
    'as' => 'customer.'
], function () {

});
Route::get('/CustomerHomePage', [App\Http\Controllers\Customer_profileController::class, 'index']);
Route::get('/user/{id}', [App\Http\Controllers\Worker_profileController::class, 'clicked'])->middleware('auth')->name('worker_profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//=====================================================================================================

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/CustomerHomePage', [App\Http\Controllers\Customer_profileController::class, 'index']);
Route::get('/WorkerProfile', [App\Http\Controllers\Worker_profileController::class, 'profile']);
Route::get('/WorkerHomePage', [App\Http\Controllers\Worker_profileController::class, 'index'])->name('WorkerHomePage');
Route::get('/user/{id}', [App\Http\Controllers\Worker_profileController::class, 'clicked'])->middleware('auth')->name('worker_profile');

Route::get('/order_history', [App\Http\Controllers\Worker_profileController::class, 'order_history']);
