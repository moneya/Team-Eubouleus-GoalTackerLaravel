@extends('layouts.app')
@section('content')
<!-- // you code here -->
<div class="container-fluid">
       <div class="row justify-content-center">
           <div class="col-xl-9 col-lg-8 col-md-12 mt-3">
              <div class="card">
                   <div class="card-header text-center">
                       Reset Password
                   </div>
                   <div class="card-body">
                       <form method="POST" action="{{ route('password.update') }}">
                       @csrf
                        <div class="form-group">
                       <label for="name">Current Password:</label>
                       <input type="text" name="name"   class="form-control"  placeholder="current password">
                       @if($errors->has('name'))
                           <span>{{ $errors->first('name') }}</span>
                       @endif
                   </div>
                   <div class="form-group">
                       <label for="name">New Password:</label>
                       <input type="text" name="pass"   class="form-control"  placeholder="New password">
                       @if($errors->has('name'))
                           <span>{{ $errors->first('name') }}</span>
                       @endif
                   </div>
                   <div class="form-group">
                       <label for="name">Confirm Password:</label>
                       <input type="text" name="name"   class="form-control"  placeholder="confirm password">
                       @if($errors->has('name'))
                           <span>{{ $errors->first('name') }}</span>
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