<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function store(Request $request)
    {
        try {
            // validate request
            $credentials = $this->validate($request, [
                'email' => 'required|max:100|email',
                'password' => 'required|min:5'
            ]);

            // try atuenticate user
            if (!auth()->attempt($credentials)) {
                return response()->json([
                    "message" => "Incorrect credentials"
                ], Response::HTTP_BAD_REQUEST);
            }

            $user = Auth::user();

            // generate authorization token and cookie
            $token = $user->createToken('token')->plainTextToken;
            $cookie = cookie('cookie_token', $token, 60 * 24);


            return response()->json([
                "message" => "Authentication succeesful",
                "token" => $token
            ], Response::HTTP_OK)->withCookie($cookie);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }

}