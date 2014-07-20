@extends('layouts.scaffold')

@section('main')

<h1>All Cvs</h1>

<p>{{ link_to_route('cvs.create', 'Add New Cv', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($cvs->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>First_name</th>
				<th>Surname</th>
				<th>Date_of_birth</th>
				<th>Nationality</th>
				<th>Address</th>
				<th>E_mail</th>
				<th>Phone_number</th>
				<th>Mobile_number</th>
				<th>Web</th>
				<th>Photo</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($cvs as $cv)
				<tr>
					<td>{{{ $cv->first_name }}}</td>
					<td>{{{ $cv->surname }}}</td>
					<td>{{{ $cv->date_of_birth }}}</td>
					<td>{{{ $cv->nationality }}}</td>
					<td>{{{ $cv->address }}}</td>
					<td>{{{ $cv->e_mail }}}</td>
					<td>{{{ $cv->phone_number }}}</td>
					<td>{{{ $cv->mobile_number }}}</td>
					<td>{{{ $cv->web }}}</td>
					<td>{{{ $cv->photo }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('cvs.destroy', $cv->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('cvs.edit', 'Edit', array($cv->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no cvs
@endif

@stop
