@extends('layouts.scaffold')

@section('main')

<h1>Show Award</h1>

<p>{{ link_to_route('awards.index', 'Return to All awards', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Award</th>
				<th>Date</th>
				<th>Institute</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
