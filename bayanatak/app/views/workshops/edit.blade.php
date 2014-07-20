@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Workshop</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($workshop, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('workshops.update', $workshop->id))) }}

        <div class="form-group">
            {{ Form::label('date', 'Date:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('date', Input::old('date'), array('class'=>'form-control', 'placeholder'=>'Date')) }}
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
      {{ link_to_route('workshops.show', 'Cancel', $workshop->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop