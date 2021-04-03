@extends('layouts.app_admin')

@section('content')


<div class="container" style="margin-bottom: 100%;">
    <center>

   
        <div class="col-10">
            <div class="card">
                <div class="card-header">Movie Dashboad</div>
                <div class="card-body">
                   

                    <div class="card-deck">
                        <div class="card border-danger h-75 d-inline-block">
                          <div class="card-body ">
                            <h5 class="card-title"><center><b>Total Added Movies</b></center></h5>
                            <center>
                                <h1>
                                   {{$total_added_movie_count}}
                                </h1>
                            </center>
                            
                          </div>
                        </div>
                        <div class="card border-primary h-75 d-inline-block">
                          <div class="card-body">
                            <h5 class="card-title"><center><b>Pending Comments</b></center></h5>
                            <center>
                                <h1>
                                    {{$pending_comment_count}}
                                </h1>
                            </center>
                            
                          </div>
                        </div>
                      
                      </div>


                </div>
            </div>
        </div>



</center>








</div>

@endsection