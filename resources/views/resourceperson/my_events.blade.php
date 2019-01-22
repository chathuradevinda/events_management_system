@extends('layouts.app')
@section('content')
        <div>
            <h1>My events.</h1>
        </div>
        
        @if (count($events)>0 )
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                @foreach ($events as $event)
                <tr>
                    <td>{{ $event->title}}</td>
                    <td>{{ $event->date}}</td>
                <td><a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit</a></td>
                    <td>
                        {{Form::open(['action' => ['EventController@destroy',$event->id],'method'=>'POST'])}}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {{Form::close()}}
                    </td>
                    

                </tr>
                @endforeach
            </table>
        @else
            <p>You have no events to display.</p>
        @endif
@endsection