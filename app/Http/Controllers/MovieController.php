<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index(Request $request)
    {

        $title = $request->input('title');

        // If a title is provided, perform a search query
        if ($title) {
            $movies = $this->searchMovies($title);
        } else {
            // If no title is provided, retrieve movies based on filter
            $filter = $request->query('filter');
            switch ($filter) {
                case '':
                    $movies = $this->fetchPopularMovies();
                    break;
                case 'top-rated':
                    $movies = $this->fetchTopRatedMovies();
                    break;
                case 'latest':
                    $movies = $this->fetchLatestMovies();
                    break;
                default:
                    $movies = $this->fetchPopularMovies();
                    break;
            }
        }

        return view('movies.index', compact('movies'));
    }



    private function searchMovies($title)
    {
        $response = Http::get('https://api.themoviedb.org/3/search/movie', [
            'api_key' => env('TMDB_TOKEN'),
            'query' => $title,
            'include_adult' => false,
            'language' => 'en-US',
            'page' => 1,
        ]);
        $results = json_decode($response->body())->results;

        return $results;
    }


    private function fetchPopularMovies()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => env('TMDB_TOKEN'),
            'sort_by' => 'popularity.desc',
        ]);

        return json_decode($response->body())->results;
    }

    private function fetchTopRatedMovies()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/top_rated', [
            'api_key' => env('TMDB_TOKEN'),
            'sort_by' => 'vote_average.desc',
        ]);

        return json_decode($response->body())->results;
    }

    private function fetchLatestMovies()
{
    // Calculate the date range for the last 2-3 months
    $startDate = date('Y-m-d', strtotime('-3 months'));
    $endDate = date('Y-m-d');

    // API request to fetch movies released in the last 2-3 months
    $response = Http::get('https://api.themoviedb.org/3/discover/movie', [
        'api_key' => env('TMDB_TOKEN'),
        'primary_release_date.gte' => $startDate,
        'primary_release_date.lte' => $endDate,
        'vote_average.gte' => 2.0,
        'sort_by' => 'release_date.asc',
    ]);

    return json_decode($response->body())->results;
}

    

    public function show($id)
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/' . $id, [
            'api_key' => env('TMDB_TOKEN'),
        ]);

        if ($response->successful()) {
            $movie = $response->json();
            return view('movies.show', compact('movie'));
        } else {
            return redirect()->route('movies.index')->with('error', 'Movie not found');
        }
    }
}
