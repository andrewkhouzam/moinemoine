@extends('layouts.scaffold')

@section('main')

<h1>All Educations</h1>

<p>{{ link_to_route('Educations.create', 'Add New Education', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($Educations->count())
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
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Educations as $Education)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no Educations
@endif

@stop
