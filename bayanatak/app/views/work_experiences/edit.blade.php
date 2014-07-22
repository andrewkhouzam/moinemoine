@extends('layouts.scaffold')

@section('main')


<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
  });
  </script>
</head>
    
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Work_experience</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($work_experience, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('work_experiences.update', $work_experience->id))) }}

        <div class="form-group">
            {{ Form::label('company_name', 'Company_name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('company_name', Input::old('company_name'), array('class'=>'form-control', 'placeholder'=>'Company_name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('job_title', 'Job_title:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text( 'job_title', Input::old('job_title'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('start_date', 'Start_date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('start_date', Input::old('start_date'), array('class'=>'form-control datepicker', 'placeholder'=>'Start Date', 'autocomplete' => 'off')
              ) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('end_date', 'End_date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
            {{ Form::text('end_date', Input::old('end_date'), array('class'=>'form-control datepicker', 'placeholder'=>'Start Date', 'autocomplete' => 'off')
              ) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('city', Input::old('city'), array('class'=>'form-control', 'placeholder'=>'City')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('country', 'Country:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('country', Input::old('country'), array('class'=>'form-control', 'placeholder'=>'Country')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', Input::old('description'), array('class'=>'form-control', 'placeholder'=>'Description')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('work_experiences.show', 'Cancel', $work_experience->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop