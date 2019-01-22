@extends('layouts.app')
@section('content')
    @foreach ($preference as $pref)   
    <div>
    <h1>Pending Request Approvals - {{$pref->title}}</h1>
        <table class="table table-bordered">     
            <tr>
                <th>Category</th>
                <td>{{$pref->category}}</td>
            </tr>
            <tr>
                <th>Purpose</th>
                <td>{{$pref->purpose}}</td>
            </tr>
            <tr>
                <th>Preferred Date</th>
                <td>{{$pref->preferred_date}}</td>
            </tr>
            <tr>
                <th>Preferred Time</th>
                <td>{{$pref->preferred_time}}</td>
            </tr>        
            <tr>
                <th>Requested By</th>   
                <td>{{$pref->name}}</td>
            </tr>            
            <tr>
                <th>Current Status</th>   
                <td>
                    <?php
                        if($pref->resolve_status==0){
                            echo "<i>Pending</i>";
                        }
                    ?>
                </td>
            </tr>
        </table>
        <div class="form-group">
            {!!Form::open(['action'=>['RequestApprovalController@update',$pref->id],'method'=>'POST'])!!}
        
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