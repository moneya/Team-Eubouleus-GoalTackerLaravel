<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Goal;
use App\Task;
use Auth;

class Showgoal extends Component
{
    protected $goal;
    public $name;

    public function mount($id)
    {
    $this->goal = Goal::FindorFail($id);
    $this->goal;
    }

    public function render()
    {
        return view('livewire.show-goals', [
            'goal' => $this->goal,
        ]);
    }
}
