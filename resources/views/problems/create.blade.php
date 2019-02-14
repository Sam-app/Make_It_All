@extends('layout.app')

@section('content')
    <h3>Create Problem</h3>
    {!! Form::open(['action'=>'ProblemsController@store','method'=>'POST']) !!}
    
    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('problemType', 'Problem Type')}}
            {{ Form::select('problemType', array(
                'Printer',
                'Network',
                'Operating system',
                'Other'),
                ['class' => 'form-control','placeholder'=>'Title']

            )}}
    </div>

    <div class="form-group">
            {{Form::label('userName', 'User Name')}}
            {{Form::text('userName', '', ['class' => 'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
            {{Form::label('department', 'Problem Type')}}
            {{ Form::select('department', array(
                'HR',
                'Technicians',
                'Managment',
                'Other'),
                ['class' => 'form-control','placeholder'=>'Title']

            )}}
    </div>
    <div class="form-group">
            {{Form::label('discription', 'Disrciption')}}
            {{Form::textarea('discription','' , ['class' => 'form-control','placeholder'=>'Disrciption'])}}
    </div>

    
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

   {!! Form::close() !!}

@endsection