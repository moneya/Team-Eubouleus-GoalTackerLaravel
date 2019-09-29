<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
   <div class="container-fluid">
    <div class="row">
    <div class="col-xl-9 col-lg-8 mt-3">
        @livewire('todos', $goal->id)
    </div>

    <div class="col-xl-3 col-lg-4 bg-white">
    <div class="border-bt">
    <div class="text-center mt-4 p-2">
        <span class="float-left">
          <h6><strong>{{ $total }}</strong></h6>
         <h5>Total Task</h5>
        </span>

        <span class="float-right">
         <h6><strong>{{ $completed }}</strong></h6>
         <h5>Completed</h5>
        </span>
    </div>
    <div class="clearfix mb-3"></div>
    </div>
    {{--  end stat  --}}
     {{--  Start progress bar   --}}
    <div class="border-bt">
        <div class="text-center mt-3 mb-3 pt-2 pb-2">
        <h5>Progress</h5>
            <div class="meter">
                <span style="width: {{ $progress }}%"></span>
            </div>
             <h6 class="mt-3"><strong>{{ $progress }}%</strong></h6>
        </div>
    </div>

    {{--  Start about  --}}
    <div class="border-bt">
        <div class="text-center mt-3 mb-3 pt-2 pb-2">
        <h5>About</h5>
            <p>
                {{ $goal->about }}
            </p>
           
        </div>
    </div>
      
      {{-- start  Due date  --}}

    <div class="border-bt">
        <div class="text-center mt-3 mb-3 p-2">
       <span class="float-left">
         <h6><strong>Due Date</strong></h6>
       </span>

       <span class="float-right">
         <h6>{{ $goal->duedate }}</h6>
        </span>
        </div>
        <div class="clearfix mb-3"></div>
    </div>

    {{--  Start status  --}}

     <div class="border-bt">
        <div class="text-center mt-3 mb-3 pt-2 pb-2">
        <h5>Goal Status</h5>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="completed" 
            @if( $goal->status === 'completed')
                checked
            @endif
            >
            <label class="form-check-label" for="exampleRadios1">
               Done
            </label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="ongoing"
            @if( $goal->status === 'ongoing')
                checked
            @endif
             >
            <label class="form-check-label" for="exampleRadios1">
               Ongoing
            </label>
        </div>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="inactive"
         @if( $goal->status === 'inactive')
                checked
            @endif
        >
        <label class="form-check-label" for="exampleRadios2">
            Ongoing
        </label>
        </div>
        
           
        </div>


       
    </div>

     {{--  Star Action  --}}
    <div class="border-bt">
        <div class="text-center mt-3 mb-3 pt-2 pb-2">
        <h5>About</h5>
            <p>
                <a class="btn btn-md btn-success" href="{{ url('/goals')}}/{{ $goal->id }}/edit" 
                >Edit</a>
            </p>

            <p>
                <button class="btn btn-md btn-danger"  onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                        wire:click="deleteGoal({{ $goal->id }})">Delete</button>
            </p>
           
        </div>
    </div>

    </div>
  

   

    </div>
   </div>
</div>
