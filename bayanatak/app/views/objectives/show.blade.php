@extends('layouts.scaffold')

@section('main')

<h1>Show Objective</h1>

<p>{{ link_to_route('objectives.index', 'Return to All objectives', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Objective</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $objective->objective }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('objectives.destroy', $objective->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('objectives.edit', 'Edit', array($objective->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
