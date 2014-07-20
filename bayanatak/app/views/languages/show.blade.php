@extends('layouts.scaffold')

@section('main')

<h1>Show Language</h1>

<p>{{ link_to_route('languages.index', 'Return to All languages', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Language</th>
				<th>Language_scale</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $language->language }}}</td>
					<td>{{{ $language->language_scale }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('languages.destroy', $language->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('languages.edit', 'Edit', array($language->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
