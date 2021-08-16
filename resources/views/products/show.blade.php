@extends('layouts.app')
@section('content')

<a class="btn btn-success" href="/product">Go back</a>
    <div class="row">
        
        <div class="col-md-6 col-sm-12">
            <img class="img-fluic" src="{{$product[0]->image}}" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <h2>{{$product[0]->name}}</h2>
        </div>
    </div>
@endsection
