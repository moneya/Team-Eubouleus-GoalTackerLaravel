<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Goal;
use Auth;
use Redirect;

class Editgoal extends Component
{

    protected $goal;
    // protected $todo;
    public $name ="";
    public $about ="";
    public $duedate ="";
    public $status ="";
    public $success ="";

    public function render()
    {
        return view('livewire.editgoal', [
            'goal' => $this->goal,
            'success' => $this->success,
        ]);
    }

    public function mount($id)
    {
    $this->goal = Goal::FindorFail($id);
    // $this->goal;
    $this->name = $this->goal->name;
    $this->about = $this->goal->about;
    $this->duedate = $this->goal->duedate;
    $this->status = $this->goal->status;
    }

    public function editGoal()
    {
        $goal = Goal::find($this->goal->id);
        $goal->name = $this->name;
        $goal->about = $this->about;
        $goal->duedate = $this->duedate;
        $goal->status = $this->status;
        $goal->save();
    //    if( $goal->save())
    //    {
    //     $this->name = $goal->name;
    //     $this->about = $goal->about;
    //     $this->duedate = $goal->duedate;
    //     $this->status = $goal->status;
    //     $this->success = true ;
        
    //    }
       return redirect()->to('/goals/'.$this->goal->id.'/edit');
        

    }
}
