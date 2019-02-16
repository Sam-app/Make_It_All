@extends('layouts.app')

@section('content')
    <h3>Make a Call</h3>
    {!! Form::open(['action'=>'CallsController@store','method'=>'POST']) !!}
    
    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::number('problem_id', 1, ['class' => 'form-control'])}}
        </div>

    <div class="form-group">
            {{Form::label('tele_number', 'Telephone Number')}}
            {{Form::text('tele_number', '', ['class' => 'form-control','placeholder'=>'019122372'])}}
    </div>

    <div class="form-group">
            {{Form::label('discription', 'Disrciption')}}
            {{Form::textarea('discription','' , ['class' => 'form-control','placeholder'=>'Disrciption'])}}
    </div>

    
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

   {!! Form::close() !!}

@endsection
