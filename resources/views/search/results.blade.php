@extends('layouts.app')

@section('content')

<!-- content  -->
<div class="clearfix">
    <div class="banner" id="titleBanner">
        <h1>Search result</h1>
    </div>
{{-- problem table --}}
    @if (count($problems)>0)
    <div class="body clearfix" id="tableBody">
            <table class="table" align="center">
                <tr>
                    <th class="headingCell">Problem Id</th>
                    <th class="headingCell">Problem title</th>
                    <th class="headingCell">Problem Type</th>
                    <th class="headingCell">Caller User Name</th>
                    <th class="headingCell">Department</th>
                    <th class="headingCell">Call Date</th>
                    <th class="headingCell"> </th>
                </tr>
        @foreach ($problems as $problem)

                    <tr class="dataRow">
                            <td class="dataCell">{!!$problem->id!!}</td>
                            <td class="dataCell">{!!$problem->title!!}</td>
                            <td class="dataCell">{!!$problem->problemType!!}</td>
                            <td class="dataCell">{!!$problem->userName!!}</td>
                            <td class="dataCell">{!!$problem->department!!}</td>
                            <td class="dataCell">{!!$problem->created_at!!}</td>
                            <td class="dataCell"><a href="/problems/{{$problem->id}}"><button type="button" class="btn btn-primary">View</button></a></td>
                     </tr>

        @endforeach

        @else
        <h3 class='text-center'> No result found</h3>
    @endif
</div>


    
@endsection