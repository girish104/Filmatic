<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->input('title');
        $filter = $request->query('filter');
    
        if ($title) {
            $movies = $this->searchMovies($title);
        } else {
            $movies = $this->fetchAllMovies();
        }
    
        if ($filter && $movies) {
            switch ($filter) {
                case 'popular':
                    usort($movies, function ($a, $b) {
                        return $b->popularity <=> $a->popularity;
                    });
                    break;
                case 'top-rated':
                    usort($movies, function ($a, $b) {
                        return $b->vote_average <=> $a->vote_average;
                    });
                    break;
                case 'latest':
                    usort($movies, function ($a, $b) {
                        $dateA = date_create_from_format('Y-m-d', $a->release_date);
                        $dateB = date_create_from_format('Y-m-d', $b->release_date);
                        return $dateB <=> $dateA;
                    });
                    break;
            }
        }
    
        return view('movies.index', compact('movies'));
    }
    


    private function searchMovies($title)
    {
        $endpoint = 'https://api.themoviedb.org/3/search/movie';
        $params = [
            'api_key' => env('TMDB_TOKEN'),
            'query' => $title,
            'include_adult' => false,
            'language' => 'en-US',
            'page' => 1,
        ];
    
        $response = Http::get($endpoint, $params);
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
        $response = Http::get('https://api.themoviedb.org/3/movie/latest', [
            'api_key' => env('TMDB_TOKEN'),
            'sort_by' => 'release_date.desc',
        ]);

        return json_decode($response->body())->results;
    }

    private function fetchAllMovies()
    {
        $response = Http::get('https://api.themoviedb.org/3/discover/movie', [
            'api_key' => env('TMDB_TOKEN'),
        ]);

        return json_decode($response->body())->results;
    }



    // show movies 

    public function show($id)
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/' . $id, [
            'api_key' => env('TMDB_TOKEN'),
        ]);

        // Check if the response is successful and contains movie data
        if ($response->successful()) {
            $movie = $response->json();
            return view('movies.show', compact('movie'));
        } else {
            return redirect()->route('movies.index')->with('error', 'Movie not found');
        }
    }
}
