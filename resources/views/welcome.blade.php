@extends('layouts.app1')
@extends('layouts.nav')

@section('content')


<div id="site-content">
   
            <div class="page" style="background-color: transparent">
                <div class="row" style="background-color: transparent">
                    <div class="col-md-12 bg-dark">
                        <div class="slider" style="background-color: transparent">
                            <ul class="slides" style="background-color: transparent">
                                
                                <li><a href="#"><img src="{{ asset('img/dummy/wonder.jpg') }}" alt="Slide 1"></a></li>
                                <li><a href="#"><img src="{{ asset('img/dummy/falcon.jpg') }}" alt="Slide 2"></a></li>
                                <li><a href="#"><img src="{{ asset('img/dummy/godzilla.jpg') }}" alt="Slide 3"></a></li>



                            </ul>
                        </div>
                    </div>
                  
                </div> 
            </div>


                  <main class="main-content bg-dark" style="">
                 
              <div class="container bg-dark">

                <div class="card bg-dark sm-1">
                    <div class="card-body">

                            <div class="card mt-1 bg-dark">
                                <div class="card sm-1 " style="background-color: #ddececc9">
                                    <div class="card-body">
                                        <center>
                                            <h1>All Movies</h1>
                                        </center>
                                        
                                        <div class="row">
                                                @foreach ($view_movie as $movie)
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="latest-movie">
                                                        <div class="myDIV"><a href="{{url('/view_movie')}}/{{$movie->id}}"><img src="{{ asset($movie->movie_image_path) }}"alt="Movie 3"></a></div>
                                                        <center>
                                                            <p class="mt-2"><b>{{$movie->movie_name}}</b></p>
                                                        </center>
                                                          
                                                    </div>
                                                </div>
                                                @endforeach
                                          
                        
                                        </div> <!-- .row -->
                                    </div>
                                </div>    
                            </div>  
            
                       
                     </div> 
         
                </div>

              </div>
            </main>


</div>
     













