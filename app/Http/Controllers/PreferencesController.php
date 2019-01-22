<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preferences;

class PreferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.add_preferences');
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
            'category' => 'required',
            'purpose' => 'required',
            ]);
    
            $preferences = new Preferences;
            $preferences->title = $request->input('title');
            $preferences->category = $request->input('category');
            $preferences->purpose = $request->input('purpose');
            $preferences->preferred_date = $request->input('preferredDate');
            $preferences->preferred_time = $request->input('preferredTime');
            $preferences->user_id = auth()->user()->id;
            $preferences->save();
    
            return redirect('/add_preferences')->with('success','Preferences Added');
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
        $preferences = Preferences::find($id);
        return view('student.edit_preferences')->with('preferences',$preferences);
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
            'title'=>'required',
            'category'=>'required',
            'purpose'=>'required',
            'preferred_date'=>'required',
            'preferred_time'=>'required',
        ]);

            $preferences = Preferences::find($id);
            $preferences->title = $request->input('title');
            $preferences->category = $request->input('category');
            $preferences->purpose = $request->input('purpose');
            $preferences->preferred_date = $request->input('preferred_date');
            $preferences->preferred_time = $request->input('preferred_time');
            $preferences->user_id = auth()->user()->id;
            $preferences->save();

            return redirect('/home')->with('success','Preferences Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
