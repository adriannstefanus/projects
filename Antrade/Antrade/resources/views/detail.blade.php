
@section('content')
    <div class="row">
        @foreach($product as $p)
            <div>
            <img src="/{{$p->product_image}}" style="width: 300px;">
            </div>
        <label>Name : </label>
            <p>{{$p->product_name}}</p>
        <label>Product description : </label>
            <p>{{$p->description}}</p>
        <label>Estimated Worth : </label>
            <p>{{$p->worth}}</p>
        <label>Age : </label>
            <p>{{$p->age}}</p>
        <label>Category : </label>
            <p>{{$p->category}}</p>
        @endforeach
    </div>
@stop

@extends('layouts.index')

@section('title', 'Your Products')
