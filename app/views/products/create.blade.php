@extends('layouts.scaffold')

@section('main')

<h1>Create Product</h1>

{{ Form::open(array('route' => 'products.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug') }}
        </li>

        <li>
            {{ Form::label('price', 'Price:') }}
            {{ Form::input('number', 'price') }}
        </li>

        <li>
            {{ Form::label('city_id', 'City_id:') }}
            {{ Form::input('number', 'city_id') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


