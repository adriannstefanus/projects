@section('content')
    <div class="container">
        <h1>My Item</h1>
    @foreach($product as $p)

     <div style="display: block">

         <table cellpadding="10" class="row mx-auto">
            <tr class="mx-auto">
                <img src="/{{$p->product_image}}" width="150px">
                <td>
                    {{$p->product_name}}<br>
                    {{$p->description}}<br>
                    <a href="/editProduct/{{$p->productcode}}">EDIT</a>
                    <a href="/delete/{{$p->productcode}}">DELETE</a>
                </td>
            </tr>
         </table>
         <br>
     </div>
    @endforeach
    </div>
@stop
@extends('layouts.index')

@section('title', 'Add Item')
