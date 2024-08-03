<?php

use App\Http\Controllers\Auth\ProviderController;
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

// Display the login form
Route::get('/login', [ProviderController::class, 'showLoginForm'])->name('login');

// Handle the login form submission
Route::post('/login', [ProviderController::class, 'login'])->name('login.post');

// Display the welcome page (root path)
Route::get('/', [ProviderController::class, 'index'])->name('home');

// Add a route for logging out
Route::post('/logout', [ProviderController::class, 'logout'])->name('logout');

// Handling registrartion form
Route::post('/register', [ProviderController::class, 'register'])->name('register.post');


// Socialite routes
Route::get('/auth/redirect/{provider}', [ProviderController::class, 'redirect']);
Route::get('/auth/callback/{provider}', [ProviderController::class, 'callback']);