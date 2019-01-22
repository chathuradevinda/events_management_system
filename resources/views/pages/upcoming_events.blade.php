@extends('layouts.app')
@section('content')
        <div>
            <h1>Upcoming Events</h1>
            @if (count($events) > 0)
                @foreach ($events as $event)
                    <div class="well">
                        <h3>{{$event->title}}</h3>
                        <small>On {{ date('d-m-Y', strtotime($event->date)) }} from {{ $event->startTime }} to {{ $event->endTime }}</small>
                    
                    </div>
                @endforeach
            @else
                <p>No events found.</p>
            @endif
        </div>
@endsection

