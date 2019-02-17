@extends('layouts.app')
<style>

                html {
                    overflow-y: scroll;
                }
                  body {
                    margin: 0;
                    text-align: center;
                    position:relative
                }
                  table {
                    border: none;
                    border-collapse: collapse;
                  }
        
                  td {
                    padding: 8px;
                    border: 1px solid #CCC;
                  }
        
                  th {
                    text-align: left;
                    padding: 8px;
                    border: 1px solid #CCC;
                  }
        
                  .container {
                    padding: 8px;
                  }
        
                  .navbar{
                    background-color: #E7E7E7;
                    padding: 8px;
                  }
        
                  ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                }
        
                li {
                    float: left;
                }
        
                .navbtn{
                  display: block;
                  color: #333333;
                  padding: 024px;
                  height: 64px;
                  background-color: #E7E7E7;
                  border: none;
                  font-size: 12px;
                }
        
                .navbtn:hover {
                  background-color: #C9C9C9;
                }
        
        
                    .loginBanner{
                        box-sizing: border-box;
                        text-align: left;
                        border: 2px solid black;
                        border-radius: 5px;
                        font-size: 16px;
                        font-family: Arial;
        
        
                    }
                    .loginDataDiv{
                        padding-left: 89%;
                    }
                    .logOutButtonDiv{
                        padding-left: 91%;
                    }
                    .banner{
                        text-align: center;
                        font-size: 25px;
                        font-family: "Trebuchet MS";
                        font-variant: small-caps;
                    }
                    .table{
                        border-collapse: collapse;
        
                    }
                    .headingCell{
                        text-align: center;
                        /*border-bottom: 1px black;*/
                        background-color: #230c32;
                        color: white;
                        padding: 11px;
                        font-family: "Trebuchet MS";
        
                    }
                    .dataRow{}
        
                    .dataRow:nth-child(even){background-color: #f2f2f2}
        
                    .dataRow:hover {background-color: darkorchid; color: white;}
        
        
                    .dataCell{
                        text-align: center;
                        padding: 11px;
                        font-family: Arial;
                    }
                    .logOutButton{
                        font-family: Arial;
                        font-size: 16px;
                        background-color: #3b1253;
                        color: white;
                        height: 30px;
                    }
                    .logOutButton:hover {background-color: darkorchid; color: white;}
        
                    .modifyButton{
                        font-family: Arial;
                        font-size: 16px;
                        background-color: #9ee7ff;
                        text-align: center;
                        height: 30px;
                        /*border: 2px ridge #00002b;*/
                        border-radius: 4px;
                    }
        
                    .modifyButton:hover {background-color: #d12e73; color: white;/*border: 3px groove #491225; */border-radius: 4px;}
        
                .recTbl{
                background-color: white;
                border: 1px solid #DDDDDD;
                border-collapse: collapse;
                margin:8px;
                width:720px;
                }
        
        
                .recHdr{
                  border: none;
                  border-collapse: collapse;
                  color:#4D90FF;
                  /* min-width:640px;
                  max-width:640px; */
                  font-weight: bold;
                }
        
                .recLbl{
                  font-family: "Trebuchet MS", Helvetica, sans-serif;
                  font-size: 12px;
                  text-align: left;
                  border: none;
                  border-collapse: collapse;
                  width:192px;
                }
        
                .recVal{
                  text-align: left;
                  border:none;
                  border-left: none;
                  border-right: none;
                  border-collapse: collapse;
                }
        
                .recInput{
                    border:1px solid #DDDDDD;
                    width:100%;
                  }
        
                  .recTitle{
                    text-align:left;
                    color:white;
                    font-size: 24px;
                    background-color: #DD3B3C;
                    padding:16px;
                    width:768px;
                    margin:auto;
                  }
                  .recContainer{
                    background-color: #F6F6F6;
                    padding:16px;
                    width:768px;
                    margin:auto;
                  }
        
                  .recRow{
                    text-align: left;
                    border:none;
                  }
        
                  .recBtn{
                    background-color: #DD3B3C;
                    border-radius: 32px;
                    color:white;
                    float: right;
                    border:none;
                    padding:8px;
                    font-size: 12px;
                  }
           </style>
@section('content')
  
<!-- content  -->

        <a href="/problems" class='btn btn-primary'>Go Back</a>

       <div class="card bg-light">
        
            <h2 class="card-header text-center ">
                    <strong>Problem details</strong>
            </h2>
            <div class="card-body">
                    <h3 class="card-title"> <strong> Problem Title :</strong>  {{$problem->title}}</h3>


                        <div class="row">
                                <div class="col-md-2">
                                    <h4><strong>Discription :</strong></h4> 
                                </div>
                                <div class="col " style="margin-top:4px;margin-left:-50px">
                                    <p class="card-text">{{$problem->discription}}</p>
                                </div>
                        </div>
                        <br>

                        @if ($problem->completed)
                                {{-- Resolved --}}
                                {{-- Specialist display --}}
                                @if ($specialist)
                                <div class="row">
                                                <div class="col-md-2">
                                                <h5><strong>Resolved by :</strong></h5> 
                                                </div>
                                                <div class="col" style="margin-top:4px;margin-left:-50px">
                                                <p class="card-text">{{$specialist->name}}</p>
                                                </div>
                                </div>
                                @else
                                <div class="row">
                                                <div class="col-md-2">
                                                <h5><strong>Resolved by:</strong></h5> 
                                                </div>
                                                <div class="col" style="margin-top:4px;margin-left:-50px">
                                                <p class="card-text">Unknown </p>
                                                </div>
                                </div>        
                                @endif
                                
                                {{--End Specialist display --}}
                            
                        @else
                         {{-- Not Resolved --}}
                                {{-- Specialist display --}}
                                @if ($specialist)
                                <div class="row">
                                                <div class="col-md-2">
                                                <h5><strong>Assigned :</strong></h5> 
                                                </div>
                                                <div class="col" style="margin-top:4px;margin-left:-50px">
                                                <p class="card-text">{{$specialist->name}}</p>
                                                </div>
                                </div>
                                @else
                                <div class="row">
                                                <div class="col-md-2">
                                                <h5><strong>Assigned to :</strong></h5> 
                                                </div>
                                                <div class="col" style="margin-top:4px;margin-left:-50px">
                                                <p class="card-text">Not assigned to specialist </p>
                                                </div>
                                </div>        
                                @endif
                                
                                {{--End Specialist display --}}
                                
                        @endif

                        {{-- Specialist display --}}
                        {{-- @if ($specialist)
                        <div class="row">
                                        <div class="col-md-2">
                                            <h4><strong>Assigned :</strong></h4> 
                                        </div>
                                        <div class="col" style="margin-top:4px;margin-left:-50px">
                                            <p class="card-text">{{$specialist->name}}</p>
                                        </div>
                        </div>
                        @else
                        <div class="row">
                                        <div class="col-md-2">
                                            <h4><strong>Assigned to :</strong></h4> 
                                        </div>
                                        <div class="col" style="margin-top:4px;margin-left:-50px">
                                            <p class="card-text">Not assigned to specialist yet </p>
                                        </div>
                        </div>        
                        @endif --}}

                        {{--End Specialist display --}}

                        <hr>
                        <div class="row text-center">
                                        <div class="col-md-2">
                                            <h4><strong>Created on :</strong></h4> 
                                        </div>
                                        <div class="col" style="margin-top:4px;margin-left:-50px">
                                            <h6 class="card-text">{{$problem->created_at}} by  : <strong>{!!$problem->userName!!}</strong></h6>
                                        </div>
                                </div>
                        
                    <a href="/problems/{{$problem->id}}/edit" class="btn btn-primary">Edit</a>
                    <a id="toggle_call_form" href="#call_form" class="btn btn-primary">call</a>

                    <div class="btn float-right">
                                {!!Form::open(['action'=>['ProblemsController@destroy',$problem->id],'method'=>'POST','class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!} 
                    </div>

                    <hr>

                </div>    
        </div>

       
       {{-- Add a new call form --}}
        <div id='call_form' style="margin-top:30px">
                        <h3>Make New Call</h3>
                        {!! Form::open(['action'=>'CallsController@store','method'=>'POST']) !!}
                        
                        <div class="form-group">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', '', ['class' => 'form-control col-md-6','placeholder'=>'Title'])}}
                        </div>
                        <div id='problem_id' class="form-group">
                            {{Form::number('problem_id', $problem->id, ['class' => 'form-control col-md-6'])}}
                            </div>
                    
                        <div class="form-group">
                                {{Form::label('tele_number', 'Telephone Number')}}
                                {{Form::text('tele_number', '', ['class' => 'form-control col-md-6','placeholder'=>'019122372'])}}
                        </div>
                    
                        <div class="form-group">
                                {{Form::label('discription', 'Disrciption')}}
                                {{Form::textarea('discription','' , ['class' => 'form-control col-md-6','placeholder'=>'Disrciption'])}}
                        </div>
                    
                        
                        {{Form::submit('Submit',['class'=>'btn btn-primary','id'=>'call_form_submit'])}}
                    
                       {!! Form::close() !!}
        </div>
        {{-- End- Add a new call form --}}

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
                        <th class="headingCell">Call Time</th>
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
            <h5>No Related call found</h5>
        @endif
@endsection







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
     $(document).ready(function(){

        //hide the form onload
        $("#call_form").toggle();

        $("#toggle_call_form").click(function(){
            $("#call_form").show();
         });

         //hide problem_id input form
         $('#problem_id').hide();


         
      });




</script>