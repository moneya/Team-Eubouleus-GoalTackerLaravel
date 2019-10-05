@extends('layouts.app')
@section('content')
<!-- // you code here -->
<div class="container-fluid">
       <div class="row justify-content-center">
           <div class="col-xl-9 col-lg-8 col-md-12 mt-3">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
                @endif
              <div class="card">
                   <div class="card-header text-center">
                       Reset Password
                   </div>
                   <div class="card-body">
                      <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 

                        <div class="form-group">
                       <label for="password">Current Password:</label>
                       <input type="password"  class="form-control"  placeholder="current password" name="current_password" autocomplete="current-password">
                       @if($errors->has('current_password'))
                           <span>{{ $errors->first('current_password') }}</span>
                       @endif
                   </div>
                   <div class="form-group">
                       <label for="password">New Password:</label>
                       <input  name="new_password" type="password" class="form-control"  placeholder="New password" name="new_password" autocomplete="current-password">
                       @if($errors->has('new_password'))
                           <span>{{ $errors->first('new_password') }}</span>
                       @endif
                   </div>
                   <div class="form-group">
                       <label for="password">Confirm Password:</label>
                       <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password" placeholder="confirm password">
                       @if($errors->has('new_confirm_password'))
                           <span>{{ $errors->first('new_confirm_password') }}</span>
                       @endif
                   </div>
                   <div class="modal-footer">
                       <button  type="submit" class="btn btn-success" >Update</button>
                   </div>
                   </form>
                </div>
           </div>
         </div>
      </div>
</div>

@endsection