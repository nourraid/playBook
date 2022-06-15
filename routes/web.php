<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\BookController;
use \App\Http\Controllers\admin\DashController;
use \App\Http\Controllers\admin\UserController;
use \App\Http\Controllers\admin\AdminController;
use \App\Http\Controllers\admin\CategoryController;
use \App\Http\Controllers\admin\AuthorController;
use \App\Http\Controllers\admin\FavoriteController;
use \App\Http\Controllers\frontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('admin')->middleware('auth:webadmin')->group(function () {
    Route::get('/', [DashController::class, 'showindex'])->name('dashboard');
    Route::resource('/book', BookController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/admin', AdminController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/author', AuthorController::class);
    Route::resource('/favorite', FavoriteController::class);
    Route::get('/admin/{id}/reset', [AdminController::class, 'reset'])->name('admin.reset');
    Route::put('/admin/{id}/reset/do_reset', [AdminController::class, 'do_reset'])->name('admin.do_reset');

});

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/user_logout', [frontController::class, 'user_logout'])->name('user_logout');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::post('/user_authenticate', [frontController::class, 'user_authenticate'])->name('user_authenticate');


Route::get('/', [frontController::class, 'showhome'])->middleware('auth:web');
Route::prefix('user')->middleware('auth:web')->group(function () {
    Route::get('/', [frontController::class, 'showhome'])->name('home');
    Route::get('/books', [frontController::class, 'showbooks'])->name('books');
    Route::get('/categories', [frontController::class, 'showcategories'])->name('categories');
    Route::get('/categories/{id}', [frontController::class, 'showcatbooks'])->name('catbooks');
    Route::get('/book_information/{id}', [frontController::class, 'showbookinfo'])->name('bookinfo');
    Route::get('/author_books/{id}', [frontController::class, 'showauthorbook'])->name('authorbooks');
    Route::get('/mail', [frontController::class, 'mail'])->name('mail');
    Route::post('/search', [frontController::class, 'search'])->name('search');
    Route::get('/profile', [frontController::class, 'profile'])->name('profile');

});
