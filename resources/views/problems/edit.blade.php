@extends('layouts.app')

@section('content')
    <h3>Edit Problem</h3>
    {!! Form::open(['action'=>['ProblemsController@update',$problem->id],'method'=>'POST']) !!}
    
    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $problem->title, ['class' => 'form-control','placeholder'=>'Title'])}}
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
            {{Form::label('userName', 'User Name  :')}}
            {{Form::text('userName', $problem->userName, ['class' => 'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
            {{Form::label('department', 'Department Name : ')}}
            {{ Form::select('department', array(
                'HR',
                'Technicians',
                'Managment',
                'Other'),
                ['class' => 'form-control','placeholder'=>'eg HR']

            )}}
    </div>

    <div class="form-group">
            {{Form::label('discription', 'Disrciption :')}}
            {{Form::textarea('discription', $problem->discription, ['class' => 'form-control','placeholder'=>'Disrciption','id'=>'comment'])}}
    </div>

    <div class="row">
           <div class="col">
                   Completed :
           </div>
           <div class="col">
                        <div class="radio">
                                        <label> <input type="radio"  name="completed" value='1' > Yes </label>
                                   </div>
                                   <div class="radio">
                                        <label > <input type="radio" name="completed" value="0" > No </label>
                                   </div>
                                    <div class="radio">
                                       <label > <input type="radio" name="completed" value="0" > Working on It </label> 
                                </div>
           </div>
        </div>

   
        {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

   {!! Form::close() !!}

@endsection