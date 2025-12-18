<div class="movie-card">
    <div class="movie-poster" 
     style="background-image: url('{{ !empty($poster) ?asset("$poster")  : asset('default-poster.svg') }}');">
        @if ($premiere)
                <span class="premiere-badge">{{ $premiere }}</span>
        @endif
        @if (!empty($age))
        <span class="age-rating">{{ $age }}</span>
        @endif
    </div>
    <div class="movie-info">
        <p class="movie-title">{{ $title }}</p>
        <div class="movie-meta">
            @foreach($genres as $genre)
                <span>{{ $genre }}</span>
            @endforeach
        </div>
        <ul class="time-slots">
            @foreach($times as $time)
            <div class="time-info">
            <li class="time-slot">
                <span class="time">{{ $time['time'] }}</span>
                 @if (isset($time['price']) && $time['price'])
                    <div class="price">
                            <span>{{ $time['format'] }}</span>
                            <span>{{ $time['price'] }}</span>
                    </div>
                @endif
            </li>
            @if (isset($time['hall']) && $time['price'])
            <p class="hall">{{ $time['hall'] }}</p> 
            @endif
            </div>
            @endforeach
        </ul>
    </div>
</div>
