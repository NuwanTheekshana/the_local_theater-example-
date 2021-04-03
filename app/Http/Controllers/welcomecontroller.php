<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_tbls;
use Auth;

class welcomecontroller extends Controller
{
    public function index()
    {
        $view_movie = movie_tbls::where('status', '1')->get();
        return view('welcome')->with('view_movie', $view_movie);
    }
}
