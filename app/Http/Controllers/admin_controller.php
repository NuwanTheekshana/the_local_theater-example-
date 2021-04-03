<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_tbls;
use App\Models\comment_tbls;
use App\Models\User;
use Auth;
use Hash;

class admin_controller extends Controller
{
    public function admin_home()
    {
        $pending_comment_count = comment_tbls::where('movie_comment_status', 'Pending')->count();
        $total_added_movie_count = movie_tbls::where('status', '1')->count();

        return view('admin/admin_home')
        ->with('pending_comment_count', $pending_comment_count)
        ->with('total_added_movie_count', $total_added_movie_count);
    }

    public function add_movie()
    {
        return view('admin/add_movie');
    }

    public function find_movie()
    {
        $all_movie = movie_tbls::where('status', '1')->get();
        return view('admin/find_movie')->with('all_movie', $all_movie);
    }

    public function admin_user_register(Request $request)
    {
        return view('admin/user_register');
    }

    public function find_user()
    {
        $all_users = User::where('status', '1')->get();
        return view('admin/user_details')->with('all_users', $all_users);
    }

    public function user_register(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $Permission = $request->Permission;
        $password = $request->password;
        $username = $fname." ".$lname;
    
            $this->validate($request, [
            'fname' => 'required|max:50|string',
            'lname' => 'required|max:50|string',
            'Permission' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            ]);

        $new_user = new User();
        $new_user->fname = $fname;
        $new_user->lname = $lname;
        $new_user->username = $username;
        $new_user->email = $email;
        $new_user->password = Hash::make($password);
        $new_user->Permission = $Permission;
        $new_user->save();

        return redirect()->back()->with('success', 'User registration successfully..!');
    }

    public function update_user_details(Request $request)
    {
        $id = $request->userid;
        $fname = $request->f_name;
        $lname = $request->l_name;
        $email = $request->email;
        $Permission = $request->user_permission;
        $username = $fname." ".$lname;
    
            $this->validate($request, [
            'f_name' => 'required|max:50|string',
            'l_name' => 'required|max:50|string',
            'user_permission' => 'required|string',
            'email' => 'required|string|email|max:255',
            ]);

        $update_user = User::find($id);
        $update_user->fname = $fname;
        $update_user->lname = $lname;
        $update_user->username = $username;
        $update_user->email = $email;
        $update_user->Permission = $Permission;
        $update_user->update();

        return redirect()->back()->with('success', 'User details update successfully..!');
    }

    public function remove_user(Request $request)
    {
        $id = $request->remove_movie_id;

        $remove_user = User::find($id);
        $remove_user->status = 0;
        $remove_user->update();

        return redirect()->back()->with('success', 'User details remove successfully..!');

    }


    public function insert_movie(Request $request)
    {
        $movie_name = $request->movie_name;
        $movie_year = $request->movie_year;
        $movie_summary = $request->movie_summary;
        $genres = $request->genres;
        $genres = implode(',', $genres);
        $movie_image = $request->file('movie_image');
        $datetimesum = date('Y') + date('m') + date('d') + date('H') + date('i') + date('s');
        $movie_id = $datetimesum + rand(100,1000000);
        $insert_user_id = Auth::user()->id;
        $insert_user_name = Auth::user()->username;

        $errors = [
            'movie_name.required' => 'Movie Name is Required.',
            'movie_name.max' => 'Movie nName may not be greater than 200 characters.',
            'movie_year.required' => 'Movie Title is Required.',
            'movie_summary.required' => 'Movie summery is Required.',
            'movie_image.max' => 'Movie image may not be greater than 4MB.',
            'movie_image.required' => 'Movie image is Required.',
            ];
    
            $this->validate($request, [
            'movie_name' => 'required|max:200',
            'movie_year' => 'required|numeric',
            'movie_summary' => 'required|string',
            'genres' => 'required',
            'movie_image' => 'required|image|mimes:jpeg,png,jpg|max:4096|dimensions:max_width=200,max_height=300',
            ],$errors);

        $movie_image_name = 'img-'.rand().'.'.$movie_image->getClientOriginalExtension();
        $movie_image_path = 'img/movie_img/'.$movie_image_name;
        $movie_image->move(public_path('img/movie_img'), $movie_image_name);

        $new_movie = new movie_tbls();
        $new_movie->movie_id = $movie_id;
        $new_movie->movie_name = $movie_name;
        $new_movie->movie_year = $movie_year;
        $new_movie->movie_summery = $movie_summary;
        $new_movie->movie_genres = $genres;
        $new_movie->movie_image_path = $movie_image_path;
        $new_movie->insert_user_id = $insert_user_id;
        $new_movie->insert_user_name = $insert_user_name;
        $new_movie->save();

        return redirect()->back()->with('success', 'Data insert successfully..!');

    }

    public function update_movie(Request $request)
    {
        $id = $request->update_movie_id;
        $update_movie_name = $request->update_movie_name;
        $update_movie_year = $request->update_movie_year;
        $update_movie_summery = $request->update_movie_summery;
        $update_movie_genres = $request->update_movie_genres;

        $errors = [
            'update_movie_name.required' => 'Movie Name is Required.',
            'update_movie_name.max' => 'Movie Name may not be greater than 200 characters.',
            'update_movie_year.required' => 'Movie year is Required.',
            'update_movie_summery.required' => 'Movie summery is Required.',
            'update_movie_genres.required' => 'Movie genres is Required.',
            ];
    
            $this->validate($request, [
            'update_movie_name' => 'required|max:200',
            'update_movie_year' => 'required|numeric',
            'update_movie_summery' => 'required|string',
            'update_movie_genres' => 'required',
            ],$errors);


        $update_movie = movie_tbls::find($id);
        $update_movie->movie_name = $update_movie_name;
        $update_movie->movie_year = $update_movie_year;
        $update_movie->movie_summery = $update_movie_summery;
        $update_movie->movie_genres = $update_movie_genres;
        $update_movie->update();

        return redirect()->back()->with('success', 'Movie update successfully..!');
    }

    public function remove_movie(Request $request)
    {
        $id = $request->remove_movie_id;

        $remove_movie = movie_tbls::find($id);
        $remove_movie->status = 0;
        $remove_movie->update();

        return redirect()->back()->with('success', 'Movie remove successfully..!');
    }

    public function comment_add(Request $request)
    {
       $id = $request->movie_ids;
       $movie_comment = $request->movie_comment;
       $find_movie = movie_tbls::find($id);
       $movie_id = $find_movie->movie_id;
       $movie_name = $find_movie->movie_name;
       $comment_add_user_id = Auth::user()->id;
       $comment_add_user_name = Auth::user()->username;
       $date = date('Y-m-d H:i:s');

       $add_comment = new comment_tbls();
       $add_comment->movie_id = $movie_id;
       $add_comment->movie_name = $movie_name;
       $add_comment->movie_comment = $movie_comment;
       $add_comment->movie_comment_user_id = $comment_add_user_id;
       $add_comment->movie_comment_user = $comment_add_user_name;
       $add_comment->movie_comment_date = $date;
       $add_comment->movie_comment_status = "Pending";
       $add_comment->admin_user_id = "";
       $add_comment->save();

       return redirect()->back()->with('success', 'Your feedback send successfully..!');

    }

    public function pending_comment()
    {
        $pending_comment = comment_tbls::where('movie_comment_status', 'Pending')->get();
        return view('admin/pending_comment')->with('pending_comment', $pending_comment);
    }

    public function update_movie_comment(Request $request)
    {
        $id = $request->update_id;
        $update_movie_comment = $request->update_movie_comment;
        $admin_user_id = Auth::user()->id;

        $update_comment = comment_tbls::find($id);
        $update_comment->movie_comment = $update_movie_comment;
        $update_comment->movie_comment_status = "Agree";
        $update_comment->admin_user_id = $admin_user_id;
        $update_comment->update();

        return redirect()->back()->with('success', 'Comment accept successfully..!');
    }

    public function reject_comment(Request $request)
    {
        $id = $request->remove_movie_id;
        $admin_user_id = Auth::user()->id;

        $reject_comment = comment_tbls::find($id);
        $reject_comment->movie_comment_status = "Reject";
        $reject_comment->admin_user_id = $admin_user_id;
        $reject_comment->update();

        return redirect()->back()->with('success', 'Comment reject successfully..!');
    }

    public function accept_comment(Request $request)
    {
        $id = $request->accept_movie_id;
        $admin_user_id = Auth::user()->id;

        $reject_comment = comment_tbls::find($id);
        $reject_comment->movie_comment_status = "Agree";
        $reject_comment->admin_user_id = $admin_user_id;
        $reject_comment->update();

        return redirect()->back()->with('success', 'Comment reject successfully..!');
    }

    
}
