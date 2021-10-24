@section('content')
    @foreach($product as $p)
        <img src="/{{$p->product_image}}">
    @endforeach
    @stop
@extends('layouts.index')

@section('title', 'Add Item')
