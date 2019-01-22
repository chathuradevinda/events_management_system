<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PagesController extends Controller
{
    public function index(){
        $events = Event::where('approval_status',1)->get();
        return view('pages.upcoming_events')->with('events', $events);
    }

    public function contactus(){
        return view('pages.contact_us');
    }

    public function upcomingEvents(){
        return view('pages.upcoming_events');
    }

    
}
