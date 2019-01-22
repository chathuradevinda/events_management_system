@extends('layouts.app')
@section('content')
    <div>
        <h1>Pending Approvals</h1>
        @if (count($events) > 0)
        @foreach ($events as $event)
            <div class="well">
                <h3>{{$event->title}}</h3>
                <small>On {{ date('d-m-Y', strtotime($event->date)) }} from {{ $event->startTime }} to {{ $event->endTime }}</small>
                <a href="event_approval/{{$event->id}}/edit"><button class="btn btn-info" style="float: right">Review Event</button></a>
            </div>
        @endforeach
    @else
        <p>No events found.</p>
    @endif
    </div>
@endsection