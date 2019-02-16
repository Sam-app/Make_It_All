@extends('layouts.app')

@section('content')
    <h2>
        Existing calls
    </h2>
    @if (count($calls)>0)
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