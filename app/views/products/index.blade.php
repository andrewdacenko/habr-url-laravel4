@extends('layouts.scaffold')

@section('main')

<h1>All Products</h1>

<p>{{ link_to_route('products.create', 'Add new product') }}</p>

@if ($products->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Slug</th>
				<th>Price</th>
				<th>City_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($products as $product)
				<tr>
					<td>{{{ $product->name }}}</td>
					<td>{{{ $product->slug }}}</td>
					<td>{{{ $product->price }}}</td>
					<td>{{{ $product->city_id }}}</td>
                    <td>{{ link_to_route('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('products.destroy', $product->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no products
@endif

@stop
