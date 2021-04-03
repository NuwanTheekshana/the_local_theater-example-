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

            <table id="pending_comment_tbl" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="15%">Date</th>
                        <th width="15%">Movie Name</th>
                        <th width="20%">Movie Comment</th>
                        <th width="15%">Commend insert user</th>
                        <th width="12%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pending_comment as $movie)
                    <tr>
                        <td>{{$movie->movie_comment_date}}</td>
                        <td>{{$movie->movie_name}}</td>
                        <td>{{$movie->movie_comment}}</td>
                        <td>{{$movie->movie_comment_user}}</td>
                        <td>
                            <center>
                                <Button class="btn btn-warning btn_style mb-2" id="accept_btn" data-toggle="modal" data-target="#update_comment{{$movie->id}}" style="background-color: orange"><i class="fa fa-pencil-square-o"></i> Edit & Accept</Button>
                                <Button class="btn btn-success btn_style mb-2" id="accept_btn" data-toggle="modal" data-target="#accept_comment{{$movie->id}}" style="background-color: green"><i class="fa fa-pencil-square-o"></i> Accept</Button>
                                <Button class="btn btn-danger btn_style" data-toggle="modal" data-target="#reject_comment{{$movie->id}}" style="background-color: red"><i class="fa fa-trash"></i> Reject</Button>
                            </center>
                          
                        </td>
                    </tr>



               

                                <!--Update Comment Modal -->
                <div id="update_comment{{$movie->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">{{$movie->movie_name}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('update_movie_comment')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="update_movie_name" class="col-sm-4 col-form-label">Movie Title</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="update_movie_name" name="update_movie_name" value="{{$movie->movie_name}}">
                                      <input type="hidden" name="update_id" id="update_id" value="{{$movie->id}}">
                                    </div>
                                  </div>
                    
                                  <div class="form-group row">
                                    <label for="update_movie_title" class="col-sm-4 col-form-label">Movie Comment</label>
                                    <div class="col-sm-8">
                                      <textarea type="text" class="form-control" id="update_movie_comment" name="update_movie_comment">{{$movie->movie_comment}}</textarea>
                                    </div>
                                  </div>
                    
                             
                            </div>
                    
                            <div class="mb-3">
                                <center>
                                    <button type="submit" class="btn btn-warning" id="update_cmt_btn" style="background-color: orange">Update & Accept</button>
                                </center>
                            </div>
                    
                        </form>

                            </div>
                       
                    </div>
                
                    </div>


                </div>


                <div id="reject_comment{{$movie->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">{{$movie->movie_name}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <p>Do you want to reject this comment ?</p>

                        <form action="{{route('reject_comment')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$movie->id}}" name="remove_movie_id">
                            <button type="submit" class="btn btn-danger mr-2 pull-right" style="background-color: red;" id="remove_movie_btn">Yes, Reject this comment</button>
                            <button type="button" data-dismiss="modal" class="btn btn-warning mr-2 pull-right" style="background-color: orange;" id="remove_movie_btn">No, Don't reject</button>    

                        </form>

                            </div>
                       
                    </div>
                
                    </div>
                </div>




                    {{-- Accept modal --}}
                <div id="accept_comment{{$movie->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">{{$movie->movie_name}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <p>Do you want to accept this comment ?</p>

                        <form action="{{route('accept_comment')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$movie->id}}" name="accept_movie_id">
                            <button type="submit" class="btn btn-success mr-2 pull-right" style="background-color: green;" id="remove_movie_btn">Yes, Accept this comment</button>
                            <button type="button" data-dismiss="modal" class="btn btn-warning mr-2 pull-right" style="background-color: orange;" id="remove_movie_btn">No, Don't accept</button>    

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