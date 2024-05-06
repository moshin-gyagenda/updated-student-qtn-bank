<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CourseUnitController;
use App\Http\Controllers\PastPaperController;
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

Route::controller(UserController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('login', 'create')->name('login');
    Route::get('register', 'register')->name('register');
    Route::post('user-login', 'login')->name('user-login');
    Route::get('logout', 'logout')->name('logout');
    Route::post('user-register', 'store')->name('user-register');
});

Route::group(['middleware' =>['auth:sanctum']], function() {
    //Admin Dashboard routes
    Route::controller(DashboardController::class)->group(function() {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('program-past-paper', 'create')->name('program-past-paper');
    });

    //Program routes
    Route::controller(ProgramController::class)->group(function() {
        Route::get('program', 'index')->name('program');
        Route::post('add-program', 'store')->name('add-program');
        Route::get('view-programs', 'create')->name('view-programs');
    });

    //Course Unit routes
    Route::controller(CourseUnitController::class)->group(function() {
        Route::get('create-course-unit', 'index')->name('create-course-unit');
        Route::post('add-course-unit', 'store')->name('add-course-unit');
        Route::get('view-course-unit', 'create')->name('view-course-unit');
    });

     //Past Paper routes
     Route::controller(PastPaperController::class)->group(function() {
        Route::get('create-past-paper', 'index')->name('create-past-paper');
        Route::post('add-past-paper', 'store')->name('add-past-paper');
        Route::get('view-past-paper', 'create')->name('view-past-paper');
        Route::delete('/pastpaper/{id}',  'destroy')->name('pastpaper.destroy');
    });

    Route::controller(UserController::class)->group(function() {
        Route::get('view-users', 'show')->name('view-users');
        Route::get('create-user', 'user')->name('create-user');
        Route::post('register-user', 'store')->name('register-user');
    });
    

});