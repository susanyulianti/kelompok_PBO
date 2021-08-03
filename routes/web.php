<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BookReturnController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
    return view('login.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {
        // data

        Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
        Route::resource('member', MemberController::class);
        Route::resource('book', BookController::class);
        Route::resource('transaction', TransactionController::class);
        Route::resource('bookreturn', BookReturnController::class);
        Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
    });

    Route::middleware(['user'])->group(function () {
        // user
        Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
        Route::resource('book', BookController::class);
        Route::resource('transaction', TransactionController::class);
        Route::resource('bookreturn', BookReturnController::class);
    });

    Route::get('/logout', function() {
        Auth::logout();
        redirect('/login');
    });

});
