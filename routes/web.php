<?php

use Illuminate\Support\Facades\Route;

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

Route::group( [ 'middleware' =>'auth'], function()
{


    Route::prefix('admin')->group(function () {

       
        Route::resource('/users', 'App\Http\Controllers\Admin\UserController')->middleware('is_admin');
        Route::resource('/blogs', 'App\Http\Controllers\Admin\BlogsController')->middleware('is_admin');
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('is_admin');       
            
    });
});


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
