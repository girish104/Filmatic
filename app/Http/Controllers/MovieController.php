<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    private $api_key;
    private $base_url = 'https://api.themoviedb.org/3';

    public function __construct()
    {
        $this->api_key = env('TMDB_TOKEN');
    }

    public function index(Request $request)
    {
        $title = $request->input('title');
        $filter = $request->query('filter');
    
        $movies = $title ? $this->searchMovies($title) : $this->fetchAllMovies();
    
        if ($filter && $movies) {
            $this->applyFilter($movies, $filter);
        }
    
        return view('movies.index', compact('movies'));
    }

    private function searchMovies($title)
    {
        return $this->fetchMovies('search/movie', ['query' => $title]);
    }

    private function fetchAllMovies()
    {
        return $this->fetchMovies('discover/movie');
    }

    private function fetchMovies($endpoint, $params = [])
    {
        $params = array_merge($params, ['api_key' => $this->api_key]);
        $response = Http::get("{$this->base_url}/{$endpoint}", $params);
        return json_decode($response->body())->results;
    }

    private function applyFilter(&$movies, $filter)
    {
        switch ($filter) {
            case 'popular':
                usort($movies, fn($a, $b) => $b->popularity <=> $a->popularity);
                break;
            case 'top-rated':
                usort($movies, fn($a, $b) => $b->vote_average <=> $a->vote_average);
                break;
            case 'latest':
                usort($movies, fn($a, $b) => strtotime($b->release_date) <=> strtotime($a->release_date));
                break;
        }
    }

    public function show($id)
    {
        $movie = $this->fetchMovies("movie/{$id}");

        if ($movie) {
            return view('movies.show', compact('movie'));
        } else {
            return redirect()->route('movies.index')->with('error', 'Movie not found');
        }
    }
}
