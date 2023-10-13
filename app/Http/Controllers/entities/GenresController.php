<?php

namespace App\Http\Controllers\entities;

use App\Http\Controllers\Controller;
use App\Http\Resources\Genres\GenreCollection;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class GenresController extends Controller
{

    public function index(Request $request)
    {
        return new GenreCollection(Genre::all());
    }

    public function store(Request $request)
    {
        try {
            // validate data
            $this->validate($request, [
                "name" => ["required", "min:3", "max:20", "unique:genres"]
            ]);

            // create new genre
            $genre = new Genre();

            $genre->name = $request->name;
            $genre->created_by = Auth::id();
            $genre->updated_by = Auth::id();

            // save new genre
            $genre->save();

            return response()->json([
                "message" => "Genre created successfully",
                "genre_id" => $genre->id
            ], Response::HTTP_CREATED);
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
            // validate genre exists
            $genre = Genre::find($id);

            if (!$genre) 
            {
                return response()->json([
                    "message" => "Genre don't exists"
                ], Response::HTTP_NOT_FOUND);
            }

            // validate data
            $this->validate($request, [
                "name" => ["required", "min:3", "max:20", "unique:genres,name," . $id . ",id"]
            ]);

            $genre->name = $request->name;
            $genre->updated_by = Auth::id();

            $genre->save();

            return response()->json([
                "message" => "Genre updated successfully",
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
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "message" => "Genre don't exists"
            ], Response::HTTP_NOT_FOUND);
        }

        $genre->delete();

        return response()->json([
            'message' => 'Genre deleted successfully'
        ]);
    }
}