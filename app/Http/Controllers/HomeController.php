<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_tbls;
use App\Models\comment_tbls;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view_movie = movie_tbls::where('status', '1')->get();
        return view('home')->with('view_movie', $view_movie);
    }

    public function view_movie($id)
    {
        $find_movie = movie_tbls::find($id);
        $movie_id = $find_movie->movie_id;
        $comment_tbl = comment_tbls::where('movie_id', $movie_id)->where('movie_comment_status', 'Agree')->get();

        return view('view_movie')
        ->with('find_movies', $find_movie)
        ->with('comment_tbl', $comment_tbl)
        ;
    }

}
