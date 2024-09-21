<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $data = $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required', 'min:8']
        ]);

        #find user that matches with email
        $user = User::where('email', $data['email'])->first();

        #if user's email and password does not match
        if(!$user || !Hash::check($data['password'], $user->password)){
            return response()->json([
                'data' => null,
                'message' => 'Wrong credentials'
            ], 401);
        }
        
        #create token for the user
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }
}
