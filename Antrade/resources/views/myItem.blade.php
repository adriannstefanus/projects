@section('content')
    @foreach($product as $p)
        <table cellpadding="10">
            <tr>
                <td><img src="/{{$p->product_image}}" width="150px"></td>
                <td>{{$p->product_name}}</td>
                <td>{{$p->description}}</td>
                <td><a href="/editProduct/{{$p->productcode}}">EDIT</a></td>
                <td><a href="/delete/{{$p->productcode}}">DELETE</a></td>
            </tr>
        </table>
    @endforeach
@stop
@extends('layouts.index')

@section('title', 'Add Item')
