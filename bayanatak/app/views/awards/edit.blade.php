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
        <h1>Edit Award</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($award, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('awards.update', $award->id))) }}

        <div class="form-group">
            {{ Form::label('award', 'Award:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('award', Input::old('award'), array('class'=>'form-control', 'placeholder'=>'Award')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('date', 'Date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('date', Input::old('date'), array('class'=>'form-control datepicker', 'placeholder'=>'Date', 'autocomplete'=> 'off')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('institute', 'Institute:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('institute', Input::old('institute'), array('class'=>'form-control', 'placeholder'=>'Institute')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('awards.show', 'Cancel', $award->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop