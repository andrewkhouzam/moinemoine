@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Cv</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'cvs.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('first_name', 'First_name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('first_name', Input::old('first_name'), array('class'=>'form-control', 'placeholder'=>'First_name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('surname', 'Surname:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('surname', Input::old('surname'), array('class'=>'form-control', 'placeholder'=>'Surname')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('date_of_birth', 'Date_of_birth:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('date_of_birth', Input::old('date_of_birth'), array('class'=>'form-control', 'placeholder'=>'Date_of_birth')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('nationality', 'Nationality:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('nationality', Input::old('nationality'), array('class'=>'form-control', 'placeholder'=>'Nationality')) }}
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
            {{ Form::label('phone_number', 'Phone_number:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'phone_number', Input::old('phone_number'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('mobile_number', 'Mobile_number:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'mobile_number', Input::old('mobile_number'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('web', 'Web:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('web', Input::old('web'), array('class'=>'form-control', 'placeholder'=>'Web')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('photo', 'Photo:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('photo', Input::old('photo'), array('class'=>'form-control', 'placeholder'=>'Photo')) }}
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


