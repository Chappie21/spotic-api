<?php

namespace App\Http\Resources\Albums;

use App\Http\Resources\Albums\AlbumResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AlbumCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => AlbumResource::collection($this->collection),
        ];
    }
}
