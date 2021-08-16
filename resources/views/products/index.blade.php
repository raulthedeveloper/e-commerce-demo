@extends('layouts.app')
@section('content')
<h1>I am the products page</h1>
@if(count($products) >= 1)
{{-- Brings in database query from controller variable --}}
@foreach ($products as $product)


<div class="card " style="width: 18rem;">
    <img src="{{$product->image}}" class="card-img-top" alt="...">
    <div class="card-body p-3">
        <hr>
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        
    </div>
    <div class="card-footer">
        <p class="text-center">${{$product->price}}</p>
        <a href="/product/{{$product->id}}" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endforeach
@else
<p>No Products Found</p>
@endif
@endsection
