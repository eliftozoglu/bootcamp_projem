@extends('products.products-layout')

@section('content')
  <h3>Templates</h3>
  <ul>
      @forelse($products as $product)
          <li>
              <h4>Name of product:{{$product->name}}</h4>
          </li>
      @empty
          <h3>No products</h3>
      @endforelse
  </ul>
@endsection
