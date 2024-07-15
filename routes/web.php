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

// Optional: You can add a route to show the registration form
Route::get('/register', [ProviderController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [ProviderController::class, 'register'])->name('register.post');

