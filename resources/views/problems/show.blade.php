@extends('layouts.app')
@section('content')
  
<!-- content  -->

        <a href="/problems" class='btn btn-primary'>Go Back</a>

       <div class="card bg-light">
        
            <h2 class="card-header">
                    Problem
            </h2>
            <div class="card-body">
                    <h3 class="card-title">{{$problem->title}}</h3>

                    <p class="card-text">{{$problem->discription}}</p>

                    <a href="/problems/{{$problem->id}}/edit" class="btn btn-primary">Edit</a>
                    <div class="btn">
                            {!!Form::open(['action'=>['ProblemsController@destroy',$problem->id],'method'=>'POST','class'=>'pull-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!} 
                    </div>
            </div>           
            <hr>
            <small>Created on {{$problem->created_at}}</small>
            <hr>
        </div>

        <hr>
        {{-- Problem assosiated calls  --}}
        @if (count($calls)>0)
        <h2>This Problem assoicated Calls</h2>

        <div class="body" id="tableBody">
                <table class="table" align="center">
                    <tr>
                        <th class="headingCell">Call ID</th>
                        <th class="headingCell">Call title</th>
                        <th class="headingCell">Problem ID</th>
                        <th class="headingCell">Caller Name</th>
                        <th class="headingCell">Caller Telephone</th>
                        <th class="headingCell">Call Date</th>
                    </tr>
            @foreach ($calls as $call)
                     
                        <tr class="dataRow">
                                <td class="dataCell">{{$call->id}}</td>
                                <td class="dataCell">{{$call->title}}</td>
                                <td class="dataCell"><a href="/problems/{{$call->problem_id}}">{{$call->problem_id}}</a></td>
                                <td class="dataCell">{{$call->caller_name}}</td>
                                <td class="dataCell">{{$call->tele_number}}</td>
                                <td class="dataCell">{{$call->created_at}}</td>
                        </tr>
                    
            @endforeach
            {{$calls->links()}}
        @else
            <h5>There is not calls</h5>
        @endif
@endsection