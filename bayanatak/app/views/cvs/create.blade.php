<?php $__env->startSection('main'); ?>

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Cv</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php echo implode('', $errors->all('<li class="error">:message</li>')); ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php echo Form::open(array('route' => 'cvs.store', 'class' => 'form-horizontal', 'files' => true)); ?>

        <div class="form-group">
            <?php echo Form::label('first_name', 'First_name:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::text('first_name', Input::old('first_name'), array('class'=>'form-control', 'placeholder'=>'First_name')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('surname', 'Surname:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::text('surname', Input::old('surname'), array('class'=>'form-control', 'placeholder'=>'Surname')); ?>
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
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>






        <div class="form-group">
            <?php echo Form::label('date_of_birth', 'Date_of_birth:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::text('date_of_birth', Input::old('date_of_birth'), array('class'=>'form-control', 'placeholder'=>'Date_of_birth','id'=>"datepicker", 'autocomplete' => 'off')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('nationality', 'Nationality:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::text('nationality', Input::old('nationality'), array('class'=>'form-control', 'placeholder'=>'Nationality')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('address', 'Address:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::text('address', Input::old('address'), array('class'=>'form-control', 'placeholder'=>'Address')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('e_mail', 'E_mail:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::email('e_mail', Input::old('e_mail'), array('class'=>'form-control', 'placeholder'=>'E_mail')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('phone_number', 'Phone_number:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::input('number', 'phone_number', Input::old('phone_number'), array('class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('mobile_number', 'Mobile_number:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::input('number', 'mobile_number', Input::old('mobile_number'), array('class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('web', 'Web:', array('class'=>'col-md-2 control-label')); ?>
            <div class="col-sm-10">
              <?php echo Form::text('web', Input::old('web'), array('class'=>'form-control', 'placeholder'=>'Web')); ?>
            </div>
        </div>

        <div class="form-group">
            <input type="file" value="pgp" name="photo" multiple accept=".bmp,.png,.jpeg"></input>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      <?php echo Form::submit('Create', array('class' => 'btn btn-lg btn-primary')); ?>
    </div>
</div>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.scaffold', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>