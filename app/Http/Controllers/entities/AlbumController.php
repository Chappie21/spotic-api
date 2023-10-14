<?php

namespace App\Http\Controllers\entities;

use App\Http\Controllers\Controller;
use App\Http\Resources\Albums\AlbumCollection;
use App\Http\Resources\Albums\AlbumResource;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;

class AlbumController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $artistId = $request->input('artist_id');

        $query = Album::query();

        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }

        if ($artistId) {
            $query->where('artists_id', $artistId);
        }

        $albums = $query->get();

        return new AlbumCollection($albums);
    }

    public function show(Request $request, $id)
    {
        $album = Album::find($id);

        if (!$album) {
            return response()->json([
                'message' => 'Album not found'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'album' => new AlbumResource($album)
        ], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'image' => 'max:255',
                'release' => 'date',
                'artists_id' => 'required|exists:artists,id',
            ]);

            $album = new Album([
                'name' => $request->name,
                'image' => $request->image ? $request->image : '',
                'release' => Carbon::parse($request->release),
                'artists_id' => $request->artists_id,
            ]);

            $album->created_by = Auth::id();
            $album->updated_by = Auth::id();
            $album->save();

            return response()->json([
                'message' => 'Album registered successfully',
                'album_id' => $album->id
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
            $album = Album::find($id);

            if (!$album) {
                return response()->json([
                    'message' => 'Album not found'
                ], Response::HTTP_NOT_FOUND);
            }

            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'image' => 'max:255',
                'release' => 'date',
                'artists_id' => 'required|exists:artists,id',
            ]);

            $album->name = $request->name;
            $album->image = $request->image ? $request->image : '';
            $album->release = Carbon::parse($request->release);
            $album->artists_id = $request->artists_id;
            $album->updated_by = Auth::id();
            $album->updated_at = Carbon::now();
            $album->save();

            return response()->json([
                'message' => 'Album updated successfully',
                'album_id' => $album->id
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
        $album = Album::find($id);

        if (!$album) {
            return response()->json([
                'message' => 'Album not found'
            ], Response::HTTP_NOT_FOUND);
        }

        $album->delete();

        return response()->json([
            'message' => 'Album deleted successfully',
            'album_id' => $album->id
        ]);
    }
}
