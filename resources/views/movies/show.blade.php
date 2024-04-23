@extends('layouts.app')

@section('content')
    <!-- Single Movie Card -->
    <div class="bg-gray-100 mt-10 container mx-auto rounded-lg overflow-hidden shadow-md flex hover:shadow-lg">
        <!-- Movie Poster -->
        <div class="w-1/6">
            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}"
                class="mx-auto h-80 w-full object-cover transition-transform duration-300 transform hover:scale-105">
        </div>
        <div class="p-4 w-1/2">
            <!-- Movie Title -->
            <h3 class="text-lg font-bold mb-2">{{ $movie['title'] }}</h3>
            <!-- Movie Overview -->
            <h5 class="text-lg mb-2">{{ $movie['overview'] }}</h5>
            <!-- Movie Genre -->
            <p class="text-gray-600"><span class="font-bold">Genre:</span>
                {{ implode(', ', array_column($movie['genres'], 'name')) }}
            </p>
            <!-- Release Date -->
            <p class="text-gray-600"><span class="font-bold">Release Date:</span> {{ $movie['release_date'] }}</p>
            <!-- Rating -->
            <p class="text-gray-600"><span class="font-bold">Rating:</span> {{ $movie['vote_average'] }}</p>
            <!-- Budget -->
            <p class="text-gray-600"><span class="font-bold">Budget:</span>
                ${{ number_format($movie['budget'] / 10000000, 2) }} crore
            </p>
            <!-- Revenue -->
            <p class="text-gray-600"><span class="font-bold">Revenue:</span>
                ${{ number_format($movie['revenue'] / 10000000, 2) }} crore
            </p>
        </div>
    </div>
@endsection
