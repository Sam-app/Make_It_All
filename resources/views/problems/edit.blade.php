@extends('layouts.app')

@section('content')
    <h3>Edit Problem</h3>
    {!! Form::open(['action'=>['ProblemsController@update',$problem->id],'method'=>'POST']) !!}
    
    <div class="form-group col-md-8">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $problem->title, ['class' => 'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group col-md-8">
            {{Form::label('problemType', 'Problem Type')}}
            {{ Form::select('problemType', array(
                'Printer'=>'Printer',
                'Network'=>'Network',
                'Operating system'=>'Operating system',
                'Other'=>'Other'),
                ['class' => 'form-control','placeholder'=>'Title']

            )}}
    </div>

    <div class="form-group col-md-5">
        {{Form::label('serial_number', 'Item serial :')}}
        {{Form::text('serial_number', '', ['class' => 'form-control','placeholder'=>'Item serial'])}}
     </div>

    <div class="form-group col-md-8">
            {{Form::label('specialist_id', 'Specialist ID  :')}}
            {{Form::number('specialist_id', $problem->specialist_id, ['class' => 'form-control'])}}

    </div>

    <div class="form-group col-md-8">
            {{Form::label('department', 'Department Name : ')}}
            {{ Form::select('department', array(
                'HR'=>'HR',
                'Technicians'=>'Technicians',
                'Managment'=>'Managment',
                'Other'=>'Other'),
                ['class' => 'form-control','placeholder'=>'eg HR']

            )}}
    </div>

    <div class="form-group col-md-8">
            {{Form::label('discription', 'Disrciption :')}}
            {{Form::textarea('discription', $problem->discription, ['class' => 'form-control','placeholder'=>'Disrciption','id'=>'comment'])}}
    </div>

    <div class="row">
           <div class="col-md-2">
                   Completed :
           </div>
           <div class="col">
                        <div class="radio">
                                        <label> <input id="radio_completed" type="radio"  name="completed" value='1' > Yes </label>
                                   </div>
                                   <div class="radio">
                                        <label > <input id='radio_not_completed'  type="radio" name="completed" value="0" > No </label>
                                   </div>
                                    <div class="radio">
                                       <label > <input id='radio_on_progress' type="radio" name="completed" value="0" > Working on It </label> 
                                </div>
           </div>
        </div>

        <div class="form-group col-md-9" id="resolved_by">
                        {{Form::label('resolved_by', 'resolved :')}}
                        {{Form::textarea('resolved_by', $problem->resolved_by, ['class' => 'form-control hidden_form','placeholder'=>'Disrciption','id'=>'comment'])}}
        </div>


   
        {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

   {!! Form::close() !!}

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
     $(document).ready(function(){

        //hide resolved_by input form
         $('#resolved_by').hide();

        $("#radio_completed").click(function(){
            $("#resolved_by").show();
         });

         $("#radio_not_completed").click(function(){
            $("#resolved_by").hide();
         });

         $("#radio_on_progress").click(function(){
            $("#resolved_by").hide();
         });

         
 });
 </script>