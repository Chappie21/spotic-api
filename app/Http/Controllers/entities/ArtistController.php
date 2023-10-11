<?php

namespace App\Http\Controllers\entities;

use App\Http\Controllers\Controller;
use App\Http\Resources\resources\artists\ArtistCollection;
use App\Models\Artist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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
                'first_name' => 'required|min:3|max:100',
                'last_name' => 'required|min:3|max:100',
                'artist_name' => 'required|min:3|max:100|unique:artists',
                'age' => 'integer|min:3',
                'country' => 'min:3|max:100'
            ]);

            // register new artist
            $artist = new Artist([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'artist_name' => $request->artist_name,
                'age' => $request->age,
                'country' => $request->country,
                'image' => $request->image ? $request->image : '',
            ]);

            $artist->created_by = Auth::id();
            $artist->updated_by = Auth::id();
            $artist->save();

            return response()->json([
                'message' => 'Artist register successful',
                'arists_id' => $artist->id
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $artist = Artist::find($id);

            if (!$artist) {
                return response()->json([
                    'message' => 'Artist not found'
                ], Response::HTTP_NOT_FOUND);
            }

            // validate request
            $this->validate($request, [
                'first_name' => 'required|min:3|max:100',
                'last_name' => 'required|min:3|max:100',
                'artist_name' => 'required|min:3|max:100|unique:artists,artist_name,' . $id . ',id',
                'age' => 'integer|min:3',
                'country' => 'min:3|max:100'
            ]);

            // Update artist
            $artist->first_name = $request->first_name;
            $artist->last_name = $request->last_name;
            $artist->artist_name = $request->artist_name;
            $artist->age = $request->age;
            $artist->country = $request->country;
            $artist->image = $request->image ? $request->image : '';
            $artist->updated_by = Auth::id();
            $artist->updated_at = Carbon::now();
            $artist->save();

            return response()->json([
                'message' => 'Artist updated successfully'
            ], Response::HTTP_OK);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }

    public function destroy(Request $request, $id)
    {
        $artist = Artist::find($id);

        if (!$artist) {
            return response()->json([
                'message' => 'Artist not found'
            ], Response::HTTP_NOT_FOUND);
        }

        $artist->delete();

        return response()->json([
            'message' => 'Artist deleted successfully'
        ]);
    }
}