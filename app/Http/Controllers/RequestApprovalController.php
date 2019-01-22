<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Preferences;
use App\User;

class RequestApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preferences = Preferences::where('resolve_status',0)->get();
        return view('admin.request_approval')->with('preferences',$preferences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $preference = DB::table('preferences')
        ->join('users', function ($join) use ($id) {
            $join->on('preferences.user_id', '=', 'users.id')
            ->where('preferences.id', '=', $id);
            
        })
        ->select('preferences.*','users.name')
        ->get();

        return view('admin.edit_r_approvals')->with('preference',$preference);
  
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
            'approval_status' => 'required',
            ]);
    
            $preference = Preferences::find($id);
            $preference->resolve_status = $request->input('approval_status');

            //$preference->approved_by = auth()->user()->id;
            $preference->save();
    
            return redirect('/request_approval')->with('success','Request Updated');

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
