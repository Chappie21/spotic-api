<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';

    protected $fillable = [
        'name',
        'image',
        'release',
        'artists_id',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artists_id');
    }
}
