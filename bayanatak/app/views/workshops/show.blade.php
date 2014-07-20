@extends('layouts.scaffold')

@section('main')

<h1>Show Workshop</h1>

<p>{{ link_to_route('workshops.index', 'Return to All workshops', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Date</th>
				<th>Institute</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
