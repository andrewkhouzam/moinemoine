@extends('layouts.scaffold')

@section('main')

<h1>All Awards</h1>

<p>{{ link_to_route('awards.create', 'Add New Award', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($awards->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Award</th>
				<th>Date</th>
				<th>Institute</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($awards as $award)
				<tr>
					<td>{{{ $award->award }}}</td>
					<td>{{{ $award->date }}}</td>
					<td>{{{ $award->institute }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('awards.destroy', $award->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('awards.edit', 'Edit', array($award->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no awards
@endif

@stop
