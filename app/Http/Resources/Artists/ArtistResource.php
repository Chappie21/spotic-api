<?php

namespace App\Http\Resources\resources\artists;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->first_name . ' ' . $this->last_name,
            'artist_name' => $this->artist_name,
            'age' => $this->age,
            'country' => $this->country,
            'image' => $this->image
        ];
    }
}
