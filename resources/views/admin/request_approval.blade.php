@extends('layouts.app')
@section('content')
    <div>
        <h1>Pending Request</h1>
        @if (count($preferences) > 0)
        @foreach ($preferences as $preference)
            <div class="well">
                <h3>{{$preference->title}}</h3>
                <small>On {{ date('d-m-Y', strtotime($preference->preferred_date)) }} as a {{ $preference->category }}</small>
                <a href="request_approval/{{$preference->id}}/edit"><button class="btn btn-info" style="float: right">Review Event</button></a>
            </div>
        @endforeach
    @else
        <p>No events found.</p>
    @endif
    </div>
@endsection