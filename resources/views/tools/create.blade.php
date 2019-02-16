@extends('layouts.app')

@section('content')
<h3>Register Item</h3>
<hr>
{!! Form::open(['action'=>'ToolsController@store','method'=>'POST']) !!}

<div class="form-group col-md-5">
        {{Form::label('name', 'Item Name :')}}
        {{Form::text('name', '', ['class' => 'form-control','placeholder'=>'Item Name'])}}
</div>

<div class="form-group col-md-5">
        {{Form::label('serial_number', 'Item serial :')}}
        {{Form::text('serial_number', '', ['class' => 'form-control','placeholder'=>'Item serial'])}}
</div>
<div class="form-group col-md-5">
        {{Form::label('type', 'Item Type  : ')}}
        {{ Form::select('type', array(
            'Hardware'=>'Hardware',
            'Networking'=>'Networking',
            'Software'=>'Software'),
            ['class' => 'form-control']

        )}}
</div>

<div class="form-group col-md-5">
    {{Form::date('bought_on', \Carbon\Carbon::now())}}

</div>


{{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection