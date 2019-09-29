<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-8 col-md-12 mt-3">
               <div class="card">
                    <div class="card-header text-center">
                        Featured
                    </div>
                    <div class="card-body">
                {{--  <form wire:submit="editGoal">  --}}
      
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" value="{{ $goal->name }}" wire:model="name"  class="form-control" id="exampleFormControlInput1" placeholder="I want to ...">
                        @if($errors->has('name'))
                            <span>{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About</label>
                        <textarea name="about" wire:model="about" class="form-control" id="exampleFormControlTextarea1" rows="3"> {{ $goal->about }}</textarea>
                        @if($errors->has('about'))
                            <span>{{ $errors->first('about') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input type="text" name="duedate" wire:model="duedate"  value="{{ $goal->duedate }}"  class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                    </div>

                <div class="form-check form-check-inline">
                        <input class="form-check-input" wire:model="status" type="radio" name="status" id="exampleRadios1" value="completed" 
                        @if( $goal->status === 'completed')
                            checked
                        @endif
                        >
                        <label class="form-check-label" for="exampleRadios1">
                        Done
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" wire:model="status" name="status" id="exampleRadios1" value="ongoing"
                        @if( $goal->status === 'ongoing')
                            checked
                        @endif
                        >
                        <label class="form-check-label" for="exampleRadios1">
                        Ongoing
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" wire:model="status" name="status" id="exampleRadios2" value="inactive"
                    @if( $goal->status === 'inactive')
                            checked
                        @endif
                    >
                    <label class="form-check-label" for="exampleRadios2">
                        Inactive
                    </label>
                    </div>

                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('/goals')}}/{{ $goal->id }}/"  class="btn btn-secondary">Back</a>
                        <button  wire:click="editGoal" class="btn btn-primary" >Save changes</button>
                    </div>
                 {{--  </form>  --}}
                    </div>
               </div>
            </div>
        </div>
    </div>

      
    @section('script')
      <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'DD/MM/YYYY',
                   
                });
            });
        </script>
    @stop

</div>
