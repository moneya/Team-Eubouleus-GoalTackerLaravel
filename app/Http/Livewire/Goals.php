<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Goal;
use Auth;
use Validator;

class Goals extends Component
{
    public $name = '';
    public $about = '';
    public $duedate = '';
    // public $status = '';

    // public function addGoal()
    // {
    //     $validatedData = $this->validate([
    //         'name' => 'required|string',
    //         'about' => 'required|string',
    //         'duedate' => 'required|string',
    //     ]);

    //     // if($validatedData){
    //         Goal::create([
    //             'user_id' => auth()->id(),
    //             'name' => $this->name,
    //             'about' => $this->about,
    //             'duedate' => $this->duedate,
    //          ]);
    //     // }
    // }

    public function render()
    {
        return view('livewire.goals', [
            'goals' => Auth::user()->goals()->orderByDesc('created_at')->get(), 
        ]);
        
    }

    public function deleteGoal($id)
    {
        Goal::find($id)->delete();
    }

   
}
