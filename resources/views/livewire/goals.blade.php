<div>
<div class="container-fluid">
        <div class="text-right mt-3">
                    <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
            Add Goal
            </button>

        </div>
 <div class="container mt-4 text-center">
    <div class="row justify-content-center">
        <div class="col-12 text-left  h-100 bg-white mb-4">
            <div class="text-grey p-3">Recent Goals</div>
        </div>

         @if (session('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
            {{ session('success') }}
          </div>
        @endif

       @if ($errors->any())
                @foreach ($errors->all() as $error)
                       <div class="alert alert-danger  alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>{{ $error }}</div>
                @endforeach
            @endif
    </div>
 </div>
</div>

<div class="container mt-4">
 <div class="row">
    {{-- Because she competes with no one, no one can compete with her. --}}
      @foreach ($goals as $goal)
           <div class="col-xl-4 col-md-4 col-sm-6 mb-3">
                <div class="card o-hidden h-200">
                     <div class="card-body  text-center">
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
       
      @endforeach
 </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form method="post" action="{{ url('/add-goal') }}">
      @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name"   class="form-control" id="exampleFormControlInput1" placeholder="I want to ...">
             @if($errors->has('name'))
                <span>{{ $errors->first('name') }}</span>
            @endif
        </div>

       

        <div class="form-group">
            <label for="exampleFormControlTextarea1">About</label>
            <textarea name="about"  class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            @if($errors->has('about'))
                <span>{{ $errors->first('about') }}</span>
            @endif
        </div>

        <div class="form-group">
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" name="duedate" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="inactive" checked>
            <label class="form-check-label" for="exampleRadios1">
               Inactive
            </label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="ongoing">
        <label class="form-check-label" for="exampleRadios2">
            Ongoing
        </label>
        </div>
        {{--  <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
        <label class="form-check-label" for="exampleRadios3">
            Disabled radio
        </label>
        </div>  --}}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

@section('script')
    <script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
    })
    </script>

    <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'DD/MM/YYYY'
                    {{--  format("dddd, MMMM Do YYYY, h:mm:ss a");  --}}
                });
            });
        </script>
@stop
