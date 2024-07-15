<?php

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

Route::get('/', function () {
    return view('welcome');
});

use Laravel\Socialite\Facades\Socialite;
 
Route::get('/auth/{provider}redirect', [ProviderController::class, 'redirect']);
 
Route::get('/auth/{provider}callback', [ProviderController::class, 'callback']);
