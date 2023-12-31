<?php

namespace App\Http\Resources\Songs;

use App\Http\Resources\Albums\AlbumResource;
use App\Http\Resources\Genres\GenreResource;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lyrics' => $this->lyrics,
            'duration' => $this->duration,
            'image' => $this->image,
            'release' => $this->release,
            'album' => new AlbumResource($this->whenLoaded('album')), // Si está cargada
            'genre' => new GenreResource($this->whenLoaded('genre')), // Si está cargada
            'created_by' => new UserResource($this->whenLoaded('createdByUser')), // Si está cargada
            'updated_by' => new UserResource($this->whenLoaded('updatedByUser')), // Si está cargada
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
