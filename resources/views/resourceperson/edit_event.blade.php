
@extends('layouts.app')
@section('content')
        <div>
            <h1>Edit event page for Resource Person.</h1>
        </div>
        {!!Form::open(['action'=>['EventController@update',$event->id],'method'=>'POST'])!!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$event->title,['class'=>'form-control','placeholder'=>'Enter Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('venue','Venue')}}
                {{Form::text('venue',$event->venue,['class'=>'form-control','placeholder'=>'Enter Venue'])}}
            </div>

            <div class="form-group">
                {{Form::label('date','Date')}}
                {{Form::date('date',$event->date,['class'=>'form-control','placeholder'=>'Select Date'])}}
            </div>

            <div class="form-group">
                {{Form::label('startTime','Start Time')}}
                {{Form::time('startTime',$event->startTime,['class'=>'form-control','placeholder'=>'Select Time'])}}
            </div>

            <div class="form-group">
                {{Form::label('endTime','End Time')}}
                {{Form::time('endTime',$event->endTime,['class'=>'form-control','placeholder'=>'Select Time'])}}
            </div>

            <div class="form-group">
                {{Form::label('category','Category')}}
                {{Form::select('category', ['Workshop' => 'Workshop', 'Competition' => 'Competition', 'Entertainment Program' => 'Entertainment Program','Other'=>'Other'],$event->category,['class'=>'form-control','placeholder'=>'--Select Event Category--'])}}
            </div>    
            
            <div class="form-group">
                {{Form::label('description','Description')}}
                {{Form::textarea('description',$event->description,['class'=>'form-control','placeholder'=>'Enter Description'])}}
            </div>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!!Form::close()!!}
    
@endsection

