<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function store(Request $request)
    {
        try {
            // validate request
            $this->validate($request, [
                'email' => 'required|max:100|email',
                'password' => 'required|min:5'
            ]);

            // try atuenticate user
            if (!auth()->attempt($request->only('email', 'password'))) {
                return response()->json([
                    "message" => "Incorrect credentials"
                ], 404);
            }

            return response()->json([
                "message" => "Authentication succeesful"
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }

}