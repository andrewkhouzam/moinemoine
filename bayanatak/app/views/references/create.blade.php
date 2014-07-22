@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Reference</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'references.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('phone_number', 'Phone_number:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text( 'phone_number', Input::old('phone_number'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('address', 'Address:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('address', Input::old('address'), array('class'=>'form-control', 'placeholder'=>'Address')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('e_mail', 'E_mail:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('e_mail', Input::old('e_mail'), array('class'=>'form-control', 'placeholder'=>'E_mail')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('link', 'Link:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('link', Input::old('link'), array('class'=>'form-control', 'placeholder'=>'Link')) }}
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


