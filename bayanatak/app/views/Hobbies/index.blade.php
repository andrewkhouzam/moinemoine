@extends('layouts.scaffold')

@section('main')

<h1>All Hobbies</h1>

<p>{{ link_to_route('Hobbies.create', 'Add New Hobby', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($Hobbies->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Hobbies as $Hobby)
				<tr>
					<td>{{{ $Hobby->name }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('Hobbies.destroy', $Hobby->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('Hobbies.edit', 'Edit', array($Hobby->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no Hobbies
@endif

@stop
