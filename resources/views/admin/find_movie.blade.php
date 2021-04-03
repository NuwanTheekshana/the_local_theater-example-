@extends('layouts.app_admin')

@section('content')

<div class="container">

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



    <div class="card mt-4">
      <div class="card-header">{{ __('Find Movie') }}</div>
        <div class="card-body">

            <table id="find_movie_tbl" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="15%">Movie Name</th>
                        <th width="15%">Movie Year</th>
                        <th width="15%">Movie Summery</th>
                        <th width="20%">Movie Genres</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_movie as $movie)
                    <tr>
                        <td>{{$movie->movie_name}}</td>
                        <td>{{$movie->movie_year}}</td>
                        <td>{{$movie->movie_summery}}</td>
                        <td>{{$movie->movie_genres}}</td>
                        <td>
                            <center>
                                <Button class="btn btn-success btn_style mb-2" id="accept_btn" data-toggle="modal" data-target="#update_modal{{$movie->id}}" style="background-color: green"><i class="fa fa-pencil-square-o"></i> Edit</Button>
                                <Button class="btn btn-danger btn_style" data-toggle="modal" data-target="#remove_movie_modal{{$movie->id}}" style="background-color: red"><i class="fa fa-trash"></i> Remove</Button>
                            </center>
                          
                        </td>
                    </tr>



                <!-- Update Modal -->
                <div id="update_modal{{$movie->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Update Movie</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        

                            <form action="{{route('update_movie')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="update_movie_name" class="col-sm-4 col-form-label">Movie Name</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="update_movie_name" name="update_movie_name" value="{{$movie->movie_name}}">
                                      <input type="hidden" class="form-control" id="update_movie_id" name="update_movie_id" value="{{$movie->id}}">
                                    </div>
                                </div>
                
                                <div class="form-group row">
                                    <label for="update_movie_year" class="col-sm-4 col-form-label">Movie Year</label>
                                    <div class="col-sm-8">
                                      <input type="number" class="form-control" id="update_movie_year" name="update_movie_year" value="{{$movie->movie_year}}">
                                    </div>
                                </div>
                
                                <div class="form-group row">
                                    <label for="update_movie_summery" class="col-sm-4 col-form-label">Movie Summery</label>
                                    <div class="col-sm-8">
                                      <textarea class="form-control" id="update_movie_summery" name="update_movie_summery">{{$movie->movie_summery}}</textarea>
                                    </div>
                                  </div>
                
                                  <div class="form-group row">
                                    <label for="update_movie_genres" class="col-sm-4 col-form-label">Movie Genres</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="update_movie_genres" name="update_movie_genres" value="{{$movie->movie_genres}}">
                                    </div>
                                </div>
                    
                    
                                      <button type="submit" class="btn btn-success pull-right" style="background-color: green;" id="update_movie_btn">Update Movie</button>
                                 
                                </form>
                



                        </div>
                     
                    </div>
                
                    </div>
                </div>


                                <!--Remove Modal -->
                <div id="remove_movie_modal{{$movie->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">{{$movie->movie_name}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <p>Do you want to remove this movie ?</p>

                        <form action="{{route('remove_movie')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$movie->id}}" name="remove_movie_id">
                            <button type="submit" class="btn btn-danger mr-2 pull-right" style="background-color: red;" id="remove_movie_btn">Yes, Remove this movie</button>
                            <button type="button" data-dismiss="modal" class="btn btn-warning mr-2 pull-right" style="background-color: orange;" id="remove_movie_btn">No, Don't remove</button>    

                        </form>

                            </div>
                       
                    </div>
                
                    </div>
                </div>





                    @endforeach
                </tbody>

            </table> 


        </div>
    </div>


</div>



@endsection