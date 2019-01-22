
@extends('layouts.app')
@section('content')
        <div>
            <h1>Edit event page for Resource Person.</h1>
        </div>
        {!!Form::open(['action'=>['PreferencesController@update',$preferences->id],'method'=>'POST'])!!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$preferences->title,['class'=>'form-control','placeholder'=>'Enter Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('category','Category')}}
                {{Form::text('category',$preferences->category,['class'=>'form-control','placeholder'=>'Select Category'])}}
            </div>

            <div class="form-group">
                {{Form::label('purpose','Purpose')}}
                {{Form::text('purpose',$preferences->purpose,['class'=>'form-control','placeholder'=>'Enter Purpose'])}}
            </div>

            <div class="form-group">
                {{Form::label('preferred_date','Preferred Date')}}
                {{Form::date('preferred_date',$preferences->preferred_date,['class'=>'form-control','placeholder'=>'Enter Preferred Date'])}}
            </div>

            <div class="form-group">
                {{Form::label('preferred_time','Preferred Time')}}
                {{Form::time('preferred_time',$preferences->preferred_time,['class'=>'form-control','placeholder'=>'Select preferred_time'])}}
            </div>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!!Form::close()!!}
    
@endsection

