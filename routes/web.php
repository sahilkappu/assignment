<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EditorController;
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
Route::post('/update-details', [UserController::class, 'updateDetails'])->name('update.address');
Route::get('logout', [LoginController::class, 'logout']);

Route::group(["middleware" => "admin"], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/add-blogs', [AdminController::class, 'addBlogs'])->name('add.blogs');
    Route::post('/create-blog', [BlogController::class, 'postCreateBlogs'])->name('create.blog');
});
Route::group(["middleware" => "editor"], function () {
    Route::get('/editor', [EditorController::class, 'index'])->name('editor.dashboard');
});
Route::group(["middleware" => "customer"], function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.dashboard');
});
Route::get('/show-blogs', [BlogController::class, 'getBlogs'])->name('show.blogs')->middleware(['auth']);
Route::get('/technology-blogs',[BlogController::class,'getTechnologyBlogs'])->name('category.technology')->middleware(['auth']);
Route::get('/science-blogs', [BlogController::class, 'getScienceBlogs'])->name('category.science')->middleware(['auth']);
Route::get('/health-blogs', [BlogController::class, 'getHealthBlogs'])->name('category.health')->middleware(['auth']);
Route::get('/food-blogs', [BlogController::class, 'getFoodBlogs'])->name('category.food')->middleware(['auth']);
