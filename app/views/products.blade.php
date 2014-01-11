@extends('layouts.scaffold')

@section('main')

@include('nav')

<h1>Products</h1>

@if (count($products) > 0)
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>City</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($products as $product)
        <tr>
          <td><a href="{{{ route('product', $product->slug)}}}">{{{ $product->name }}}</a></td>
          <td>{{{ $product->price }}}</td>
          <td><a href="{{{ route('city', $product->city->slug) }}}">{{{ $product->city->name }}}</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
  There are no products
@endif

@stop