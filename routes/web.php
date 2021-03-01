<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('auth/login', [LoginController::class,'login'])->name('login.custom');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/admin',[LoginController::class,'superAdminDashboard'])->name('superadmin.dashboard');
        Route::get('/customer',[LoginController::class,'customerDashboard'])->name('admin.dashboard');
        Route::get('/accountant',[LoginController::class,'accountantDashboard'])->name('author.dashboard');
        Route::get('/salesman',[LoginController::class,'salesmanDashboard'])->name('user.dashboard');
        Route::get('/businesspartner',[LoginController::class,'businesspartnerDashboard'])->name('user.dashboard');
        Route::get('/vendor',[LoginController::class,'vendorDashboard'])->name('user.dashboard');
    });

    
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');