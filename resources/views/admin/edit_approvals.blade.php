@extends('layouts.app')
@section('content')
    @foreach ($event as $eve)   
    <div>
    <h1>Pending Approvals - {{$eve->title}}</h1>
        <table class="table table-bordered">     
            <tr>
                <th>Venue</th>
                <td>{{$eve->venue}}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{$eve->date}}</td>
            </tr>
            <tr>
                <th>Start Time</th>
                <td>{{$eve->startTime}}</td>
            </tr>
            <tr>
                <th>End Time</th>
                <td>{{$eve->endTime}}</td>
            </tr>
             <tr>
                <th>Category</th>
                <td>{{$eve->category}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$eve->description}}</td>
            </tr>            
            <tr>
                <th>Organized By</th>   
                <td>{{$eve->name}}</td>
            </tr>            
            <tr>
                <th>Current Status</th>   
                <td>
                    <?php
                        if($eve->name==0){
                            echo "<i>Pending</i>";
                        }
                    ?>
                </td>
            </tr>
        </table>
        <div class="form-group">
                {!!Form::open(['action'=>['EventApprovalController@update',$eve->id],'method'=>'POST'])!!}
        
                    {{Form::label('Approval Status','Approval Status')}}
                    {{Form::select('approval_status', [0 => 'Pending', 1 => 'Approve'])}}
        
                    {{Form::hidden('_method','PUT')}}
                    <br>
                    {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                {!!Form::close()!!}            
        </div>
    </div>
    @endforeach
@endsection