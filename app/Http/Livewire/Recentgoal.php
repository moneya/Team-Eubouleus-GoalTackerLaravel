<?php

namespace App\Http\Livewire;


use App\Goal;
use Auth;
use Validator;

use Livewire\Component;

class Recentgoal extends Component
{
    public function render()
    {
        return view('livewire.recentgoal', [
            'goals' => Auth::user()->goals()->orderByDesc('created_at')->paginate(6), 
        ]);
    }

    public function deleteGoal($id)
    {
        Goal::find($id)->delete();
    }
}
