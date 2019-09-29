@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="container mt-4 text-center">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-md-4 col-sm-6 mb-3">
                            <div class="card text-white bg-primary o-hidden h-200">
                              <div class="card-body  p-4">
                                <div class="card-body-icon">
                                  <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class=""><strong> Ongoing! </strong></div>
                                <p> {{ $active }}</p>
                              </div>
                             
                            </div>
        </div>


        <div class="col-xl-4 col-md-4 col-sm-6 mb-3">
                            <div class="card text-white bg-success o-hidden h-200">
                              <div class="card-body  p-4">
                                <div class="card-body-icon">
                                  <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class=""><strong> Completed </strong></div>
                                <p> {{ $completed }}</p>
                              </div>
                             
                            </div>
        </div>


        <div class="col-xl-4 col-md-4 col-sm-6 mb-3">
                            <div class="card text-white bg-danger o-hidden h-120">
                              <div class="card-body p-4">
                                <div class="card-body-icon">
                                  <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class=""> <strong> All Goal </strong></div>
                                <p> {{ $all }}</p>
                              </div>
                             
                            </div>
        </div>

        {{--  Add the midbar  --}}

        <div class="col-12 text-left  h-100 bg-white mb-4">
            <div class="text-grey p-3">Recent Goals</div>
        </div>
   </div>


               @livewire('recentgoal')
        

  
</div>
@endsection
