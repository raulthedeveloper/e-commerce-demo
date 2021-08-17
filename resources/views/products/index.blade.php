@extends('layouts.app')
@section('content')
<h1>I am the products page</h1>
@if(count($products) > 0)
{{-- Brings in database query from controller variable --}}
<div class="row">
@foreach ($products as $product)


    <div class="col-md-4 col-sm-6">
        <div class="card mb-5" style="width: 18rem;">
            <img src="{{$product->image}}" style="height:300px" class="card-img-top" alt="...">
            <div class="card-body p-3">
                <hr>
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{substr($product->description, 0, 20)}}</p>

            </div>
            <div class="card-footer">
                <p class="text-center">${{$product->price}}</p>
                <a href="/product/{{$product->id}}" class="btn btn-primary">See More</a>
            </div>
        </div>
    </div>


@endforeach
</div>
@else
<p>No Products Found</p>
@endif
@endsection
