{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.app')
@section('content')

<div class="container">

        <div class="jumbotron text-center">
                <h1>Make-It-All</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis enim dolore nulla.</p>

      

         <p>
            <a class="btn btn-primary btn-lg" href="#" role="button">New Record</a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Current Jobs</a>
           </p>

       </div>

       <h3 class='text-center'>Your Problems</h3>
       @if (count($problems)>0)
       <div class="body" id="tableBody">
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
                               <td class="dataCell">{{$problem->id}}</td>
                               <td class="dataCell">{{$problem->title}}</td>
                               <td class="dataCell">{{$problem->problemType}}</td>
                               <td class="dataCell">{{$problem->userName}}</td>
                               <td class="dataCell">{{$problem->department}}</td>
                               <td class="dataCell">{{$problem->created_at}}</td>
                               <td class="dataCell"><a href="/problems/{{$problem->id}}"><button type="button" class="btn btn-primary">View</button></a></td>
                        </tr>
                   
           @endforeach
           {{$problems->links()}}
      
           @else
           <h3> No Problems Found</h3>
       @endif
       
</div>

    
@endsection