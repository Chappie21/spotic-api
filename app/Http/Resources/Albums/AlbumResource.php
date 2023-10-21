<?php

namespace App\Http\Resources\Albums;

use App\Http\Resources\Artists\ArtistResource;
use App\Http\Resources\Songs\SongResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'release' => $this->release,
            'artist' => new ArtistResource($this->whenLoaded('artist')),
            'songs' => SongResource::collection($this->whenLoaded('songs')), // Asegúrate de tener SongResource creado
        ];
    }
}
