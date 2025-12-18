<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'date',
        'time',
    ];

    protected $casts = [
        'date' => 'date',
    ];


    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
