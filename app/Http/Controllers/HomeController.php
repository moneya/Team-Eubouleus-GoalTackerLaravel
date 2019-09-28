<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Goal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentuser = Auth::user();
        // paginate the authorized user's tasks with 5 per page
        $goals = Auth::user()
            ->goals()
            ->orderByDesc('created_at')
            ->paginate(6);

            $all = Auth::user()->goals()->count();
            $active = Goal::where('status','ongoing')->where('user_id',$currentuser->id)->count();
            $completed = Goal::where('status','completed')->where('user_id',$currentuser->id)->count();

           

        // return task index view with paginated tasks
        return view('home', [
            'goals' => $goals,
            'active' => $active,
            'all' => $all,
            'completed' => $completed,
        ]);

        // return View('home')->with(array
        // (
        //     'goals' => $goals,
        //     'inactive' => $inactive,
        //     "parents" => $parents,
        //  //    "parents_email" => $parents_email,
        //  //    "parents_mobile" => $parents_mobile,
        //  "parents_exists" => $parents_exists,
        //     "mother" => $mother,
        //      "members" => $members,
        //       "roles" => $roles,
        //        "countries" => $countries,
        //         "familynotifications" => $familynotifications,
        //         "family_member" => $family_member));

        // return view('home');
    }
}
