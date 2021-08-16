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
<hr>
<a class="btn btn-dark" href="/product/{{$product[0]->id}}/edit">Edit</a>
    {!!Form::open(['action'=> ['\App\Http\Controllers\ProductController@destroy', $product[0]->id],'method'=>'POST','class'=> 'pull-right']) !!}
        {!!Form::hidden('_method','DELETE') !!}
        {!!Form::submit('Delete', ['class'=> 'btn btn-danger']) !!}
    {!!Form::close() !!}
@endsection
