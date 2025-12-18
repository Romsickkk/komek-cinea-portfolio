<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieCard extends Component
{
    public $poster;
    public $premiere;
    public $age;
    public $title;
    public $genres;
    public $times;


    public function __construct($poster = '', $premiere = '', $age = '', $title = '', $genres = [], $times = [],)
    {
        $this->poster = $poster;
        $this->premiere = $premiere;
        $this->age = $age;
        $this->title = $title;
        $this->genres = $genres;
        $this->times = $times;
    }

    public function render()
    {
        return view('components.movie-card');
    }
}
