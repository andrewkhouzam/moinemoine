@extends('layouts.scaffold')

@section('main')

<h1>All References</h1>

<p>{{ link_to_route('references.create', 'Add New Reference', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($references->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Phone_number</th>
				<th>Address</th>
				<th>E_mail</th>
				<th>Link</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($references as $reference)
				<tr>
					<td>{{{ $reference->phone_number }}}</td>
					<td>{{{ $reference->address }}}</td>
					<td>{{{ $reference->e_mail }}}</td>
					<td>{{{ $reference->link }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('references.destroy', $reference->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('references.edit', 'Edit', array($reference->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no references
@endif

@stop
