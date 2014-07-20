@extends('layouts.scaffold')

@section('main')

<h1>All Objectives</h1>

<p>{{ link_to_route('objectives.create', 'Add New Objective', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($objectives->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Objective</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($objectives as $objective)
				<tr>
					<td>{{{ $objective->objective }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('objectives.destroy', $objective->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('objectives.edit', 'Edit', array($objective->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no objectives
@endif

@stop
