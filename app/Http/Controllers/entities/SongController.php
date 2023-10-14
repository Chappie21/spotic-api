<?php

namespace App\Http\Controllers\entities;

use App\Http\Controllers\Controller;
use App\Http\Resources\Songs\SongCollection;
use App\Http\Resources\Songs\SongResource;
use App\Models\Song;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SongController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $duration = $request->input('duration');
        $releaseDate = $request->input('release_date');
        $albumId = $request->input('album_id');
        $genreId = $request->input('genre_id');
        $artistName = $request->input('artist_name');

        $query = Song::query();

        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }

        if ($duration) {
            $query->where('duration', '>=', $duration);
        }

        if ($releaseDate) {
            $query->whereDate('release', '=', $releaseDate);
        }

        if ($albumId) {
            $query->where('albums_id', '=', $albumId);
        }

        if ($genreId) {
            $query->where('genres_id', '=', $genreId);
        }

        if ($artistName) {
            // Filtrar por nombre de artista indirectamente a través de la relación de álbumes
            $query->whereHas('album.artist', function ($q) use ($artistName) {
                $q->where('artist_name', 'like', '%' . $artistName . '%');
            });
        }

        $songs = $query->get();

        return new SongCollection($songs);
    }


    public function show(Request $request, $id)
    {
        $song = Song::find($id);

        if (!$song) {
            return response()->json([
                'message' => 'Song not found'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'song' => new SongResource($song)
        ], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'lyrics' => 'required|min:3',
                'duration' => 'required|integer|min:1',
                'image' => 'url',
                'release' => 'date',
                'albums_id' => 'required|exists:albums,id',
                'genres_id' => 'required|exists:genres,id',
            ]);

            $song = new Song([
                'name' => $request->name,
                'lyrics' => $request->lyrics,
                'duration' => $request->duration,
                'image' => $request->image ? $request->image : '',
                'release' => $request->release ? Carbon::parse($request->release) : null,
                'albums_id' => $request->albums_id,
                'genres_id' => $request->genres_id,
            ]);

            $song->created_by = Auth::id();
            $song->updated_by = Auth::id();
            $song->save();

            return response()->json([
                'message' => 'Song registered successfully',
                'song_id' => $song->id
            ], Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $song = Song::find($id);

            if (!$song) {
                return response()->json([
                    'message' => 'Song not found'
                ], Response::HTTP_NOT_FOUND);
            }

            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'lyrics' => 'required|min:3',
                'duration' => 'required|integer|min:1',
                'image' => 'url',
                'release' => 'date',
                'albums_id' => 'required|exists:albums,id',
                'genres_id' => 'required|exists:genres,id',
            ]);

            $song->name = $request->name;
            $song->lyrics = $request->lyrics;
            $song->duration = $request->duration;
            $song->image = $request->image ? $request->image : '';
            $song->release = $request->release ? Carbon::parse($request->release) : null;
            $song->albums_id = $request->albums_id;
            $song->genres_id = $request->genres_id;
            $song->updated_by = Auth::id();
            $song->updated_at = Carbon::now();
            $song->save();

            return response()->json([
                'message' => 'Song updated successfully',
                'song_id' => $song->id
            ], Response::HTTP_OK);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function destroy(Request $request, $id)
    {
        $song = Song::find($id);

        if (!$song) {
            return response()->json([
                'message' => 'Song not found'
            ], Response::HTTP_NOT_FOUND);
        }

        $song->delete();

        return response()->json([
            'message' => 'Song deleted successfully',
            'song_id' => $song->id
        ], Response::HTTP_OK);
    }
}
