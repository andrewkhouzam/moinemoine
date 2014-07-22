@extends('layouts.scaffold')

@section('main')

<h1>All Educations</h1>

<p>{{ link_to_route('educations.create', 'Add New Education', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($educations->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Institute</th>
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
			@foreach ($educations as $education)
				<tr>
					<td>{{{ $education->institute }}}</td>
					<td>{{{ $education->degree }}}</td>
					<td>{{{ $education->major }}}</td>
					<td>{{{ $education->class }}}</td>
					<td>{{{ $education->description }}}</td>
					<td>{{{ $education->city }}}</td>
					<td>{{{ $education->country }}}</td>
					<td>{{{ $education->gpa }}}</td>
					<td>{{{ $education->honors }}}</td>
					<td>{{{ $education->scholorship }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('educations.destroy', $education->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('educations.edit', 'Edit', array($education->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no educations
@endif

@stop
