<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
                        <a class="text-primary dropdown-item" href="{{ url('/goals')}}/{{ $goal->id }}">View</a>
                        <a class="text-info dropdown-item" href="{{ url('/goals')}}/{{ $goal->id }}/edit">Edit</a>
                        <a class="text-danger dropdown-item" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                        wire:click="deleteGoal({{ $goal->id }})">Delete</a>
                        </div>
                        </div>
                    </div>         
                </div>
         </div>
     @empty
         <div class="col-xl-12 mb-3">
                <div class="card o-hidden h-200">
                    You have not added any goal yet
                    <br>
                    <a href="{{ url('/mygoals') }}" class="btn btn-sm btn-primary">
                    Add a Goal
                    </a>
                </div>
    </div>
    @endforelse
    
   
  </div>
</div>
