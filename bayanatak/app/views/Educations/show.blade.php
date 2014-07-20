@extends('layouts.scaffold')

@section('main')

<h1>Show Education</h1>

<p>{{ link_to_route('Educations.index', 'Return to All Educations', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>'institute</th>
				<th>Degree</th>
				<th>Major</th>
				<th>Class</th>
				<th>Description</th>
				<th>City</th>
				<th>Country</th>
				<th>Gpa</th>
				<th>Honors</th>
				<th>Scholorship</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $Education->'institute }}}</td>
					<td>{{{ $Education->degree }}}</td>
					<td>{{{ $Education->major }}}</td>
					<td>{{{ $Education->class }}}</td>
					<td>{{{ $Education->description }}}</td>
					<td>{{{ $Education->city }}}</td>
					<td>{{{ $Education->country }}}</td>
					<td>{{{ $Education->gpa }}}</td>
					<td>{{{ $Education->honors }}}</td>
					<td>{{{ $Education->scholorship }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('Educations.destroy', $Education->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('Educations.edit', 'Edit', array($Education->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
