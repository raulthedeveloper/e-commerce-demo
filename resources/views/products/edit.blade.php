@extends('layouts.app')
@section('content')
    <h1>Edit</h1>

    {!! Form::open(['action' => ['\App\Http\Controllers\ProductController@update',$product[0]->id,'method' => 'POST']]) !!}
    <div class="form-group row pb-2">
        <div class="col-md-6 col-sm-12">
            {{Form::label('name','Name')}}
            {{Form::text('name',$product[0]->name,['class' => 'form-control','placeholder' => 'name'])}}
        </div>
        <div class="col-md-6 col-sm-12">
            {{Form::label('image','Image url')}}
            {{Form::text('image',$product[0]->image,['class' => 'form-control','placeholder' => 'copy img url'])}}
        </div>

    </div>
    <div class="form-group row pb-2">
        <div class="col-md-3 col-sm-12">
            {{Form::label('price','Price')}}
            {{Form::number('price',$product[0]->price,['class' => 'form-control'])}}
        </div>
        <div class="col-md-3 col-sm-12">
            {{Form::label('small','Small')}}
            {{Form::number('small',$product[0]->small,['class' => 'form-control'])}}
        </div>
        <div class="col-md-3 col-sm-12">
            {{Form::label('medium','Medium')}}
            {{Form::number('medium',$product[0]->medium,['class' => 'form-control'])}}
        </div>
        <div class="col-md-3 col-sm-12">
            {{Form::label('large','Large')}}
            {{Form::number('large',$product[0]->large,['class' => 'form-control'])}}
        </div>

    </div>

    <div class="form-group pb-2">
        {{Form::label('description','Description')}}
        {{Form::textarea('description',$product[0]->description,['class' => 'form-control'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
