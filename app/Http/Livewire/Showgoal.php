<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Goal;
use App\Todo;
use Auth;
use Redirect;

class Showgoal extends Component
{
    protected $goal;
    protected $totaltodo;
    protected $donetodo;
    protected $progress;
    public $title = '';

    public function mount($id)
    {
    $this->goal = Goal::FindorFail($id);
    $this->goal;
    $this->totaltodo =  Todo::where('goal_id',$this->goal->id)->orderByDesc('created_at')->count();
    $this->donetodo =  Todo::where('goal_id',$this->goal->id)->where('completed',true)->count();
    if($this->totaltodo > 0)
    {
    $this->progress = number_format((($this->donetodo/ $this->totaltodo) * 100), 2);
    }
    else{
        $this->progress = 0;
    }
    }

    public function render()
    {
        return view('livewire.show-goals', [
            'goal' => $this->goal,
            'total' => $this->totaltodo,
            'completed' => $this->donetodo,
            'progress' => $this->progress,
        ]);
    }

    public function addTodo()
    {
    // $this->goal = Goal::FindorFail($id);
    // $this->goal;

        // $this->validate([
        //     'title' => 'required',
        // ]);

        // Todo::create([
        //     'user_id' => auth()->id(),
        //     'title' => $this->title,
        //     'goal_id' => $this->goal->id,
        //     'completed' => false,
        //  ]);

        // return redirect()->back('/goals/'.$this->goal->id);
        
        // return redirect()->back();
        
            // $this->title = "";
            

    }

    // public function deleteTodo($id)
    // {
    //     Todo::find($id)->delete();
    //     // redirect('/goals/'.$this->goal->id);
    //     return redirect()->to('/contact-form-success');
    // }

    public function deleteGoal($id)
    {
        Goal::find($id)->delete();
        return redirect()->to('/mygoals');
    }

    
}
