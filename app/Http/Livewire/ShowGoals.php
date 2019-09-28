<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Goal;
use App\Task;
use Auth;

class ShowGoals extends Component
{
    protected $goal;
    public $name;

    public function created($id)
    {
    $this->goal = Goal::FindorFail($id);
    }

    public function render()
    {
        return view('livewire.show-goals', [
            'goal' => $this->goal,
        ]);
    }
}
