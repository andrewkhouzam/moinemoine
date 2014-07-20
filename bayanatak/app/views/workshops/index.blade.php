@extends('layouts.scaffold')

@section('main')

<h1>All Workshops</h1>

<p>{{ link_to_route('workshops.create', 'Add New Workshop', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($workshops->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Date</th>
				<th>Institute</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($workshops as $workshop)
				<tr>
					<td>{{{ $workshop->date }}}</td>
					<td>{{{ $workshop->institute }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('workshops.destroy', $workshop->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('workshops.edit', 'Edit', array($workshop->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no workshops
@endif

@stop
