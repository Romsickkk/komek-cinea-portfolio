<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;

class MovieController extends Controller
{
    /**
     * Главная страница с афишей
     */
    public function index()
    {
        $today = Carbon::today();

        return view('cinema.index');
    }
}
