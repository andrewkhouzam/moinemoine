@extends('layouts.scaffold')

@section('main')

<h1>Show Work_experience</h1>

<p>{{ link_to_route('work_experiences.index', 'Return to All work_experiences', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Company_name</th>
				<th>Job_title</th>
				<th>Start_date</th>
				<th>End_date</th>
				<th>City</th>
				<th>Country</th>
				<th>Description</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $work_experience->company_name }}}</td>
					<td>{{{ $work_experience->job_title }}}</td>
					<td>{{{ $work_experience->start_date }}}</td>
					<td>{{{ $work_experience->end_date }}}</td>
					<td>{{{ $work_experience->city }}}</td>
					<td>{{{ $work_experience->country }}}</td>
					<td>{{{ $work_experience->description }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('work_experiences.destroy', $work_experience->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('work_experiences.edit', 'Edit', array($work_experience->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
