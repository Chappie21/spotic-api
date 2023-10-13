<?php

namespace App\Http\Resources;

use App\Http\Resources\resources\artists\ArtistResource;
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
            'release' => $this->release->format('Y-m-d'), // Formatea la fecha como "YYYY-MM-DD"
            'artist' => new ArtistResource($this->whenLoaded('artist')), // Relación con el recurso del artista
        ];
    }
}
