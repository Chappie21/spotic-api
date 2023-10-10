<?php

namespace App\Http\Controllers\entities;

use App\Http\Controllers\Controller;
use App\Http\Resources\resources\artists\ArtistCollection;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ArtistController extends Controller
{

    public function index(Request $request)
    {
        $name = $request->input('name');
        $country = strtolower($request->input('country'));

        $query = Artist::query();

        if ($name) {
            $query->where(function ($q) use ($name) {
                $q->where('first_name', 'like', '%' . $name . '%')
                    ->orWhere('last_name', 'like', '%' . $name . '%')
                    ->orWhere('artist_name', 'like', '%' . $name . '%');
            });
        }

        if ($country) {
            $query->whereRaw('LOWER(country) = ?', [$country]);
        }

        $artists = $query->get();

        return new ArtistCollection($artists);
    }

    public function store(Request $request)
    {
        try {
            // validate request
            $this->validate($request, [

                'email' => 'required|max:100|email'
            ]);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }



}