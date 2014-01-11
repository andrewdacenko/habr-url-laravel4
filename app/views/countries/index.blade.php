@extends('layouts.scaffold')

@section('main')

<h1>All Countries</h1>

<p>{{ link_to_route('countries.create', 'Add new country') }}</p>

@if ($countries->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Code</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($countries as $country)
				<tr>
					<td>{{{ $country->name }}}</td>
					<td>{{{ $country->code }}}</td>
                    <td>{{ link_to_route('countries.edit', 'Edit', array($country->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('countries.destroy', $country->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no countries
@endif

@stop
