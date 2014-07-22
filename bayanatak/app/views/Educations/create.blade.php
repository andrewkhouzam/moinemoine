@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Education</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'educations.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('institute', 'Institute:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('institute', Input::old('institute'), array('class'=>'form-control', 'placeholder'=>'Institute')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('degree', 'Degree:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('degree', Input::old('degree'), array('class'=>'form-control', 'placeholder'=>'Degree')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('major', 'Major:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('major', Input::old('major'), array('class'=>'form-control', 'placeholder'=>'Major')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('class', 'Class:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('class', Input::old('class'), array('class'=>'form-control', 'placeholder'=>'Class')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('description', Input::old('description'), array('class'=>'form-control', 'placeholder'=>'Description')) }}
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
            {{ Form::label('gpa', 'Gpa:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'gpa', Input::old('gpa'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('honors', 'Honors:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('honors', Input::old('honors'), array('class'=>'form-control', 'placeholder'=>'Honors')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('scholorship', 'Scholorship:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('scholorship', Input::old('scholorship'), array('class'=>'form-control', 'placeholder'=>'Scholorship')) }}
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


