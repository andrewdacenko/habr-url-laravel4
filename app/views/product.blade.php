@extends('layouts.scaffold')

@section('main')

@include('nav')

<h1>Product</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>City</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $product->name }}}</td>
			<td>{{{ $product->price }}}</td>
			<td><a href="{{{ route('city', $product->city->slug) }}}">{{{ $product->city->name }}}</a></td>
		</tr>
	</tbody>
</table>

@stop