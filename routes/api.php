<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // Route::get('dashboard', [UserController::class, 'dashboard']); 
    // Route::get('login', [UserController::class, 'index'])->name('login');
    // Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom'); 
    // Route::get('registration', [UserController::class, 'registration'])->name('register-user');
    // Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom'); 
    // Route::get('signout', [UserController::class, 'signOut'])->name('signout');
    return $request->user();
});
