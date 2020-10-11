<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\SiteController;
use App\Http\Controllers\Web\DashboardController;

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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('about', [SiteController::class, 'about'])->name('about');
Route::get('contact-us', [SiteController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'auth'], static function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('profile', [AuthController::class, 'profile'])->name('enrol.profile');
});

Route::group(['prefix' => 'platform', 'middleware' => ['auth', 'profile']], static function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('create-business', [DashboardController::class, 'business'])->name('create.business');
});
