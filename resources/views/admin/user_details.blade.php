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
      <div class="card-header">{{ __('Find User') }}</div>
        <div class="card-body">

            <table id="find_user_tbl" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="15%">User Name</th>
                        <th width="15%">Email</th>
                        <th width="15%">Permission Type</th>
                        <th width="30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->permission}}</td>
                        <td>
                            <center>
                                <Button class="btn btn-success btn_style" id="accept_btn" data-toggle="modal" data-target="#update_user_modal{{$user->id}}" style="background-color: green"><i class="fa fa-pencil-square-o"></i> Edit</Button>
                                <Button class="btn btn-danger btn_style" data-toggle="modal" data-target="#remove_user{{$user->id}}" style="background-color: red"><i class="fa fa-trash"></i> Remove</Button>
                            </center>
                          
                        </td>
                    </tr>


                    <!--Update Modal -->
<div id="update_user_modal{{$user->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Update User Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
            <form action="{{route('update_user_details')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="f_name" class="col-sm-4 col-form-label">First Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="f_name" name="f_name" value="{{$user->fname}}">
                      <input type="hidden" class="form-control" id="userid" name="userid" value="{{$user->id}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="l_name" class="col-sm-4 col-form-label">Last Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="l_name" name="l_name" value="{{$user->lname}}">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="user_email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="user_permission" class="col-sm-4 col-form-label">Permission</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="user_permission" name="user_permission" value="{{$user->permission}}">
                            <option value="admin">Admin</option>
                            <option value="defualt">Default</option>
                          </select>
                    </div>
                  </div>
    
                      <button type="submit" class="btn btn-primary pull-right" id="update_user_btn">Update User</button>
                 
                </form>
           
      </div>
  
    </div>
  </div>

</div>

                <div id="remove_user{{$user->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Remove user details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <p>Do you want to remove this user ?</p>

                        <form action="{{route('remove_user')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$user->id}}" name="remove_movie_id">
                            <button type="submit" class="btn btn-danger mr-2 pull-right" style="background-color: red;" id="remove_movie_btn">Yes, Remove this user</button>
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