@extends('layouts.app')

@section('content')
    <h3>Create Problem</h3>
    {!! Form::open(['action'=>'ProblemsController@store','method'=>'POST']) !!}
    
    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control col-md-8','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('problemType', 'Problem Type')}}
            {{ Form::select('problemType', array(
                'Printer'=>'Printer',
                'Network'=>'Network',
                'Operating system'=>'Operating system',
                'Other'=>'Other'),
                ['class' => 'form-control','placeholder'=>'eg Network']

            )}}
    </div>

    <div class="form-group col-md-5" style='margin-left:-11px'>
        {{Form::label('serial_number', 'Item serial :')}}
        {{Form::text('serial_number', '', ['class' => 'form-control','placeholder'=>'Item serial'])}}
     </div>

    {{-- <div class="form-group">
            {{Form::label('userName', 'User Name')}}
            {{Form::text('userName', '', ['class' => 'form-control','placeholder'=>'Title'])}}
    </div> --}}


    <div class="form-group">
            {{Form::label('department', 'Problem Type')}}
            {{ Form::select('department', array(
                'HR'=>'HR',
                'Technicians'=>'Technicians',
                'Managment'=>'Managment',
                'Other'=>'Other'),
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
