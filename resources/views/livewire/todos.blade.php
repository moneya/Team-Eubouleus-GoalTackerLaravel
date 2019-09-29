<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="mb-4 bg-white p-4">
        <input type="text" name="addTodo" class="form-control form-control-lg" id="addTodo"
        placeholder="What needs to be done?" wire:model="title" wire:keydown.enter="addTodo">
        {{--  <button class="btn btn-success" wire:click="addTodo" type="submit">Add</button>  --}}
        @if($errors->has('title'))
            <div style="color:red">
                {{ $errors->first('title') }}
            </div>
        @endif
    </div>

        <ul class="list-group" id="wrapper">
        @forelse ($todos as $todo)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
            <input type="checkbox" wire:change="toggleTodo({{ $todo->id }})" class="mr-4"  {{ $todo->completed ? 'checked' : ''}}>
            @if($todo->completed === 0)
            <a href="#" class="{{ $todo->completed ? 'completed' : ''}}" >{{ $todo->title }}</a>
            @else
            <span  class="{{ $todo->completed ? 'completed' : ''}}">{{ $todo->title }}</span>
            @endif
            </div>

            <span class="float-right">
            <a class="btn btn-sm btn-success {{ $todo->completed ? 'disabled' : ''}}" id="detailed" onclick="updateTodoPrompt('{{ $todo->title }}') || event.stopImmediatePropagation()"
                        wire:click="updateTodo({{ $todo->id }}, todoUpdated)">&times;</a>

            <a class="btn btn-sm btn-danger {{ $todo->completed ? 'disabled' : ''}}" id="detailed" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                        wire:click="deleteTodo({{ $todo->id }})">&times;</a>
            </span>
                

        </li>
        
        @empty
         <li class="list-group-item d-flex justify-content-between align-items-center text-center">
            <p>No todos added yet</p>
         </li>
            
        @endforelse
           
        </ul>
  
 </div>

@section('script')
    <script>
        let todoUpdated = '';
        function updateTodoPrompt(title) {
          event.preventDefault();
          todoUpdated = '';
          const todo = prompt('Update Todo', title);
          if (todo === null || todo.trim() === '') {
            console.log('cancel or empty');
            todoUpdated = '';
            return false;
          }
          todoUpdated = todo;
          return true;
        }
    </script>
@endsection
