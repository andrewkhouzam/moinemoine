@extends('layouts.scaffold')

@section('main')

<h1>All Languages</h1>

<p>{{ link_to_route('languages.create', 'Add New Language', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($languages->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Language</th>
				<th>Language_scale</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($languages as $language)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no languages
@endif

@stop
