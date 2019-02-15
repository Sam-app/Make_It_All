@extends('layouts.app')
@section('content')
  
<!-- content  -->

        <a href="/problems" class='btn btn-default'>Go Back</a>

        <h1> {{$problem->title}}</h1>
        <div>
            {{$problem->discription}}
        </div>
        <hr>
        <small>Created on {{$problem->created_at}}</small>
        <hr>
        <a href="/problems/{{$problem->id}}/edit" class='btn btn-default'>Edit</a>

        {!!Form::open(['action'=>['ProblemsController@destroy',$problem->id],'method'=>'POST','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
     

@endsection