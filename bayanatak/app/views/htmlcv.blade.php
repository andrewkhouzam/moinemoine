<!-- <div>{{$user->cv()->get()}}</div>
<div>{{$user->cv()->first()->awards()->get()}}</div>
<div>{{$user->cv()->first()->educations()->get()}}</div>
 -->
<?php $__env->startSection('main'); ?>
<!-- <img border="0" src="{{asset('img/bayanatak.jpeg')}}" alt="Pulpit rock" width="135" height="100"> -->
<?php $url = "/photos/thumb/".$user->cv()->first()->photo ?>
<img src="{{asset($url)}}"/>
<h1>My Cv</h1>




		
			<div>First_name : <?php echo e($user->cv()->first()->first_name); ?></div>
				<div>Surname : <?php echo e($user->cv()->first()->surname); ?></div>
				<div>Date_of_birth : <?php echo e($user->cv()->first()->date_of_birth); ?></div>
				<div>Nationality : <?php echo e($user->cv()->first()->nationality); ?></div>
				<div>Address : <?php echo e($user->cv()->first()->address); ?></div>
				<div>E_mail : <?php echo e($user->cv()->first()->e_mail); ?></div>
				<div>Phone_number : <?php echo e($user->cv()->first()->phone_number); ?></div>
				<div>Mobile_number : <?php echo e($user->cv()->first()->mobile_number); ?></div>
				<div>Web : <?php echo e($user->cv()->first()->web); ?></div>
				<div>Photo : <?php echo e($user->cv()->first()->photo); ?></div>
	
                    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.scaffold', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

