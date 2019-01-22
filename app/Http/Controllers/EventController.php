<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('pages.upcoming_events')->with('events', $events); // pages controller
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resourceperson.add_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'title' => 'required',
        'venue' => 'required',
        'date' => 'required',
        'startTime' => 'required',
        'endTime' => 'required',
        'category' => 'required',
        'description' => 'required',
        ]);

        $event = new Event;
        $event->title = $request->input('title');
        $event->venue = $request->input('venue');
        $event->date = $request->input('date');
        $event->startTime = $request->input('startTime');
        $event->endTime = $request->input('endTime');
        $event->category = $request->input('category');
        $event->description = $request->input('description');
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/add_event')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('resourceperson.edit_event')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'category' => 'required',
            'description' => 'required',
            ]);
    
            $event = Event::find($id);
            $event->title = $request->input('title');
            $event->venue = $request->input('venue');
            $event->date = $request->input('date');
            $event->startTime = $request->input('startTime');
            $event->endTime = $request->input('endTime');
            $event->category = $request->input('category');
            $event->description = $request->input('description');
            $event->user_id = auth()->user()->id;
            $event->save();
    
            return redirect('/home')->with('success','Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/home')->with('success','Event Removed');
    }
}
