<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lyrics',
        'duration',
        'image',
        'release',
        'albums_id',
        'genres_id',
        'created_by',
        'updated_by',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class, 'albums_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genres_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
