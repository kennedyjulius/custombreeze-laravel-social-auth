<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\Controller;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        return view('welcome'); // The view for the home page
    }

    public function showLoginForm()
    {
        return view('login'); // The view for the login page
    }

    public function login(Request $request)
    {
        // Your login logic here
        // Example:
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function showRegistrationForm()
    {
        return view('register'); // The view for the registration page
    }

    public function register(Request $request)
    {
        // Your registration logic here
    }
}
