<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $token = $user->createToken('token-name')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }
    //
    public function redirect($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(){
        $user = Socialite::driver($provider)->user();
        dd($user);
    }
}
