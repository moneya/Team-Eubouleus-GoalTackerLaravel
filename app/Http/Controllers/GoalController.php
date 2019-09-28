<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use Validator;
use Auth;

class GoalController extends Controller
{
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'about' => 'required|string',
            // 'duedate' => 'required|string',
          ]);
          $goal = new Goal([
            'name' => $request->get('name'),
            'about'=> $request->get('about'),
            'user_id' => auth()->id(),
            'duedate'=> $request->duedate,
            'status'=> $request->status
          ]);
          $goal->save();
        return redirect('/mygoals')->with('success', 'Goal has been added');
        // dd($goal);
    }

}
