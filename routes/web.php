<?php

use App\Http\Controllers\Admin\UserController;
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
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class)->names('admin.users');
});

Auth::routes();
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    
    Route::middleware(['auth:admin'])->group(function() {
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        // Diğer admin rotalarını buraya ekleyin
        Route::resource('users', UserController::class)->names('admin.users');
    });
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');