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

   <div class="row">
    
    @forelse ($goals as $goal)

     <div class="col-xl-4 col-md-4 col-sm-6 mb-3">
                <div class="card o-hidden h-200">
                     <div class="card-body">
                        <h5 class="card-title">{{ $goal->name }}</h5>
                        {{--  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>  --}}
                        <p class="card-text"> {{ $goal->about }}</p>
                        <div class="pl-4 pr-4 mb-2">
                            <span class="float-left"><strong>Status</strong></span>
                            <span 
                            
                            @if ($goal->status === 'inactive')
                                class="float-right text-danger bold"
                            @endif
                            
                             @if ($goal->status === 'ongoing')
                                class="float-right text-primary bold"
                            @endif

                             @if ($goal->status === 'completed')
                                class="float-right text-success bold"
                            @endif
                            
                            
                            ><strong>{{ $goal->status }}</strong></span>
                        </div>

                        <div class="clearfix"></div>
                        <div class="mt-4 text-center">
                       <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="text-primary dropdown-item" href="#">View</a>
                        <a class="text-info dropdown-item" href="#">Edit</a>
                        <a class="text-danger dropdown-item" href="#">Delete</a>
                        </div>
                        </div>
                    </div>         
                </div>
         </div>
    
    @empty
         <div class="col-xl-12 mb-3">
                <div class="card o-hidden h-200">
                    You have added any goal yet
                    <br>
                    <a href="{{ url('/mygoals') }}" class="btn btn-sm btn-primary">
                    Add a Goal
                    </a>
                </div>
    </div>
    @endforelse
    
   
  </div>

  
</div>
@endsection
