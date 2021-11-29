<?php

use App\Http\Controllers\AdminController;
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

//Admin Authentication
Route::group(['prefix' => 'admin'], function () {
    Route::get('login',[AdminController::class,'LoginView']);
    Route::post('login',[AdminController::class,'LogIn'])->name('provider.login');
    Route::get('register',[AdminController::class,'RegisterView']);
    Route::post('register',[AdminController::class,'Registration'])->name('provider.register');
    Route::get('logout',[AdminController::class,'onLogout']);
});
//,'middleware' => 'provider_auth'
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', [AdminController::class, 'DashboardView']);

});
