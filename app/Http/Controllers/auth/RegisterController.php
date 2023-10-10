<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    
    public function store(Request $request)
    {
        try {
            // validate request
            $this->validate($request, [
                'name' => 'required|min:4',
                'email' => 'required|max:100|email|unique:users',
                'password' => 'required|min:5|confirmed'
            ]);

            // create new user
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            auth()->attempt($request->only('email', 'password'));

            return response()->json([
                'message' => 'Register successful'
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }

}
