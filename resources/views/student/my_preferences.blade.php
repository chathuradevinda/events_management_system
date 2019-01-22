@extends('layouts.app')
@section('content')
        <div>
            <h1>My Preferences.</h1>
        </div>
        
        @if (count($preferences)>0 )
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Purpose</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                @foreach ($preferences as $preference)
                <tr>
                    <td>{{ $preference->title}}</td>
                    <td>{{ $preference->purpose}}</td>
                <td><a href="/preferences/{{$preference->id}}/edit" class="btn btn-default">Edit</a></td>
                    <td>
                        {{Form::open(['action' => ['EventController@destroy',$preference->id],'method'=>'POST'])}}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {{Form::close()}}
                    </td>
                    

                </tr>
                @endforeach
            </table>
        @else
            <p>You have no preferences to display.</p>
        @endif
@endsection