@extends('layout.app')
@section('content')
  
<!-- content  -->
  <div class="banner" id="titleBanner">
        <h1>Ongoing Problems</h1>
    </div>  
{{-- problem table --}}
    @if (count($problems)>1)
    <div class="body" id="tableBody">
            <table class="table" align="center">
                <tr>
                    <th class="headingCell">Problem Number</th>
                    <th class="headingCell">Problem Type</th>
                    <th class="headingCell">Caller User Name</th>
                    <th class="headingCell">Department</th>
                    <th class="headingCell">Call Date</th>
                    <th class="headingCell"> </th>
                </tr>
        @foreach ($problems as $problem)
                  <tr class="dataRow">
                    <td class="dataCell">{{$problem->id}}</td>
                    <td class="dataCell">{{$problem->problemType}}</td>
                    <td class="dataCell">{{$problem->userName}}</td>
                    <td class="dataCell">{{$problem->department}}</td>
                    <td class="dataCell">{{$problem->created_at}}</td>

                    <td class="dataCell"><a href="./update.html"><button type="button" class="btn btn-primary">Modify</button></a></td>
                </tr>
        @endforeach
   
        @else
        <h3> No Problems Found</h3>
    @endif
@endsection