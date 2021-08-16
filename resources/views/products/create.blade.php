@extends('layouts.app')
@section('content')
<h1>Add Products</h1>

{!! Form::open(['action' => '\App\Http\Controllers\ProductController@store','method' => 'POST']) !!}
    <div class="form-group row pb-2">
        <div class="col-md-6 col-sm-12">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class' => 'form-control','placeholder' => 'name'])}}
        </div>
        <div class="col-md-6 col-sm-12">
            {{Form::label('image','Image url')}}
            {{Form::text('image','',['class' => 'form-control','placeholder' => 'copy img url'])}}
        </div>

    </div>
<div class="form-group row pb-2">
    <div class="col-md-3 col-sm-12">
        {{Form::label('price','Price')}}
        {{Form::number('price','',['class' => 'form-control'])}}
    </div>
    <div class="col-md-3 col-sm-12">
        {{Form::label('small','Small')}}
        {{Form::number('small','',['class' => 'form-control'])}}
    </div>
    <div class="col-md-3 col-sm-12">
        {{Form::label('medium','Medium')}}
        {{Form::number('medium','',['class' => 'form-control'])}}
    </div>
    <div class="col-md-3 col-sm-12">
        {{Form::label('large','Large')}}
        {{Form::number('large','',['class' => 'form-control'])}}
    </div>

</div>

<div class="form-group pb-2">
    {{Form::label('description','Description')}}
    {{Form::textarea('description','',['class' => 'form-control'])}}
</div>

    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
