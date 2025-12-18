<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'poster_url',
        'age_rating',
        'is_premiere',
        'genres',
    ];




    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }

    public function getGenresArrayAttribute()
    {
        return $this->genres ? explode(',', $this->genres) : [];
    }
}
