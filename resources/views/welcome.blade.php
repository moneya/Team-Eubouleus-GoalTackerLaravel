@extends('layouts.app')
@section('content')
<div class="Main-body">
  
  <div class="firstline">Goal Tracking made easier
  </div>
  <div class="secondline">Get organised and track anything you 
    want to build with the perfect routine 
  </div>
  <div class="actionbutton">
   
      <a href="{{ url('/login') }}" class="btn btn-md sign-up-btn btn-warning">start Now</a>
      
  </div>
</div>

{{--  Enter your code @Vickyella  --}}


{{--  End your code @Vickyella  --}}

{{--  Enter your code @Valar  --}}
<style>
  .newsletter {
padding: 80px 0;
background: #f2f2f2;
}

.newsletter .content {
max-width: 800px;
margin: 0 auto;
text-align: center;
position: relative;
z-index: 2; }
.newsletter .content h2 {
color: #243c4f;
margin-bottom: 40px; }
.newsletter .content .form-control {
height: 50px;
border-color: #ffffff;
border-radius:0;
}
.newsletter .content.form-control:focus {
box-shadow: none;
border: 2px solid #243c4f;
}
.newsletter .content .btn {
min-height: 50px; 
border-radius:0;
background: #243c4f;
color: #fff;
font-weight:600;
}

</style>
<section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <form>
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit">Subscribe Now</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--  End your code @Valar  --}}


@endsection
    
      

@section('footer')
    <div class="footer">
    <p>© 2019 | Team Eubouleus</p>
  </div>
@endsection