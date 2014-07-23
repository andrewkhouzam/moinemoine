@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Work_experience</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

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

{{ Form::open(array('route' => 'work_experiences.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('company_name', 'Company Name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('company_name', Input::old('company_name'), array('class'=>'form-control', 'placeholder'=>'Job Title')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('job_title', 'Job Title:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text( 'job_title', Input::old('job_title'), array('class'=>'form-control','placeholder'=>'Company Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('start_date', 'Start Date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('start_date', Input::old('start_date'), array('class'=>'form-control datepicker', 'placeholder'=>'Start Date', 'autocomplete' => 'off')
              ) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('end_date', 'End Date:', array('class'=>'col-md-2 control-label')) }}
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
      {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

@stop


