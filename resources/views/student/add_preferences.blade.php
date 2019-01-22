@extends('layouts.app')
@section('content')
    <div>
        <h1>Add Requests.</h1>
    </div>
    {!!Form::open(['action'=>'PreferencesController@store','method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('category','Category')}}
            {{Form::select('category', ['Workshop' => 'Workshop', 'Competition' => 'Competition', 'Entertainment Program' => 'Entertainment Program','Other'=>'Other'],null,['class'=>'form-control','placeholder'=>'--Select Event Category--'])}}
        </div>    

        <div class="form-group">
            {{Form::label('purpose','Purpose')}}
            {{Form::textarea('purpose','',['class'=>'form-control','placeholder'=>'Enter Purpose'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('preferredDate','Preferred Date')}}
            {{Form::date('preferredDate','',['class'=>'form-control','placeholder'=>'Select Date'])}}
        </div>

        <div class="form-group">
            {{Form::label('preferredTime','Preferred Time')}}
            {{Form::time('preferredTime','',['class'=>'form-control','placeholder'=>'Preferred Time'])}}
        </div>        

        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!!Form::close()!!}
@endsection