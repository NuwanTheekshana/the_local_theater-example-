@extends('layouts.app1')
@extends('layouts.navhome')

@section('content')


    <div id="site-content">
        <br><br><br><br><br><br><br><br>

                    
                    <div class="container">

                            <div class="card">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                                            <div class="card" style="background-color: transparent;border-color: transparent">
                                                {{-- <img src="{{ asset('img/movie_img/223.jpg') }}" alt=""> --}}
                                                    <div class="profile-img">
                                                        <img src="http://127.0.0.1:8080/the_local_theater/public/{{$find_movies->movie_image_path}}" style="max-height: 365px;max-width: 300px;" alt="Movie Image"/>
                                                    </div>
                                                    <div class="profile-content">
                                                        <h2 class="title">
                                                            <span></span>
                                                        </h2>
                                                       
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-2 col-lg-1 mt-3">
                            
                                        </div>
                                    
                                        <div class="col-sm-8 col-md-6 col-lg-6 mt-3">
                                           <h1><b>{{$find_movies->movie_name}}</b></h1>
                                           <h1 ><small><b>{{$find_movies->movie_year}}</b></small></h1>
                                           <p><b>{{$find_movies->movie_genres}}</b></p>
                                           <p><b>{{$find_movies->movie_summery}}</b></p>
                            
                                        {{-- Comment feild --}}
                            
                                    <h1 class="text-success mt-5" style="font-size: 20px;"><b><i class="fa fa-comment"></i> Comment</b></h1>
                                        @if($errors->any())
                                            @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger" role="alert">
                                                <div>{{ $error }}</div>
                                            </div>
                                            @endforeach
                                        @endif
                        
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif

                                    <form action="{{route('comment_add')}}" method="POST">
                                        @csrf
                                        <div class="col-sm-12">
                                            <textarea type="text" class="form-control" id="movie_comment" name="movie_comment" placeholder="Type something..!"></textarea>
                                            <input type="hidden" name="movie_ids" id="movie_ids" value="{{$find_movies->id}}">
                                        </div>
    
                                          <center>
                                            <button class="btn btn-success mb-3 mt-3" type="submit" id="submit_comment" style="background-color: green"><i class="fa fa-paper-plane"></i>&nbsp; Send Comment</button>
                                          
                                          </center>
                                    </form>
                                   
                                       
                                    
                                      @foreach ($comment_tbl as $comment)
                                      <div class="card mt-2" style="background-color: rgb(41, 43, 41)">
                                        <div class="col-12">
                            
                                            <p class="form-text" style="font-size: 15px;color: rgb(135, 145, 135)"> <i class="fa fa-user-circle"></i>&nbsp;{{$comment->movie_comment_user}}&nbsp;&nbsp;&nbsp;&nbsp;{{$comment->movie_comment_date}} </p>
                                            <p class="form-text">{{$comment->movie_comment}}</p>
                                           
                                        </div>
                                     </div>
                                      @endforeach
                                        
                            
                            
                            
                            
                            
                                    </div>
                            
                                </div>




                                    
                                </div>  
                            </div>
                    </div>
    </div>

     
