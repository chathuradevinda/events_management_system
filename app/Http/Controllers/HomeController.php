<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user_category = auth()->user()->category;
        {{
            if ($user_category==1) {
                return view('admin.dashboard');
            } 
            if($user_category==2) {
                return view('resourceperson.my_events')->with('events',$user->event);
            }
            if($user_category==3) {
                return view('student.my_preferences')->with('preferences',$user->preferences);
            }
        }}
    }

    public function addEvent(){
        return view('resourceperson.add_event');
    }

    public function addPreferences(){
        return view('student.add_preferences');
    }

    public function edit(){
        return view('events.edit_event');
    }
}
