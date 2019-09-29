<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Goal;
use App\Todo;
use Auth;
use Redirect;

class Todos extends Component
{
    protected $goal;
    protected $todo;
    public $title = '';

    public function render()
    {
        return view('livewire.todos', [
           
            'todos' => $this->todo,
        ]);
    }

    public function mount($goalid)
    {
        $this->todo =  Todo::where('goal_id',$goalid)->orderByDesc('created_at')->get();
        $this->goal = Goal::FindorFail($goalid);
    }

    public function addTodo()
    {
    
    // $this->goal;
    // $this->todo =  Todo::where('goal_id',$id)->orderByDesc('created_at')->get();


        $this->validate([
            'title' => 'required',
        ]);

        Todo::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'goal_id' => $this->goal->id,
            'completed' => false,
         ]);

         $this->title = "";

         return redirect()->to('/goals/'.$this->goal->id);

           

    }

    public function deleteTodo($id)
    {
        Todo::find($id)->delete();
        return redirect()->to('/goals/'.$this->goal->id);
    }

    public function toggleTodo($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
        return redirect()->to('/goals/'.$this->goal->id);
    }

    public function updateTodo($id, $title)
    {
        $todo = Todo::find($id);
        $todo->title = $title;
        $todo->save();
        return redirect()->to('/goals/'.$this->goal->id);
    }
}
