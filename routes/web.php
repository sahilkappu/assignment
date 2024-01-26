<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->to('home');
});

Auth::routes();
Route::get('/optimize', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return redirect()->back()->with('success', 'Cache Cleared SuccessFully');
});
Route::get('/profile', function () {
    return view('profiles.overview');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/check-user-detail', [LoginController::class, 'validateDetails']);
Route::get('/{slug}', [UserController::class, 'userProfile'])->name('profile.show');
Route::post('/update-details',[UserController::class, 'updateDetails'])->name('update.address');
Route::get('logout', [LoginController::class, 'logout']);
