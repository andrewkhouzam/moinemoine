SUCCESS!
	<!-- LOGOUT BUTTON -->
	{{$user->email}}
	
	<p><?php echo link_to_route('cvs.create', 'Add New Cv', null, array('class' => 'btn btn-lg btn-success')); ?></p>
	@if(count($user->cvs)>0)
    <p>{{ link_to_route('workshops.create', 'Add New Workshop', null, array('class' => 'btn btn-lg btn-success')) }}</p>
    <p>{{ link_to_route('work_experiences.create', 'Add New Work_experience', null, array('class' => 'btn btn-lg btn-success')) }}</p>
    <p>{{ link_to_route('skills.create', 'Add New Skill', null, array('class' => 'btn btn-lg btn-success')) }}</p>
    <p>{{ link_to_route('references.create', 'Add New Reference', null, array('class' => 'btn btn-lg btn-success')) }}</p>
	<p>{{ link_to_route('objectives.create', 'Add New Objective', null, array('class' => 'btn btn-lg btn-success')) }}</p>
	<p>{{ link_to_route('languages.create', 'Add New Language', null, array('class' => 'btn btn-lg btn-success')) }}</p>
	<p>{{ link_to_route('hobbies.create', 'Add New Hobby', null, array('class' => 'btn btn-lg btn-success')) }}</p>
	<p>{{ link_to_route('awards.create', 'Add New Award', null, array('class' => 'btn btn-lg btn-success')) }}</p>
	<p><?php echo link_to_route('skills.create', 'Add New Skill', null, array('class' => 'btn btn-lg btn-success')); ?></p>
	<p><?php echo link_to_route('educations.create', 'Add New Education', null, array('class' => 'btn btn-lg btn-success')); ?></p>

@endif
	<a href="{{ URL::to('logout') }}">Logout</a>
	    	    <p>{{ link_to_route('htmlcvd', 'download') }}</p>

	    	    <p>{{ link_to_route('htmlcvg', 'gen') }}</p>

	    	    


