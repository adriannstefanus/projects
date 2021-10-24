@section('content')
    <form method="POST" action="{{'/edit'}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Product Code </label>
            <input type="text" id="p_code" name="p_code" value="{{$productcode}}" readonly="readonly">
        </div>
        <div>
            <label>Product Name </label>
            <input type="text" id="p_name" name="p_name">
        </div>
        <div>
            <label>Product Image </label>
            <input type="file" id="p_image" name="p_image">
        </div>
        <div>
            <label>Estimated worth </label>
            <input type="text" id="p_worth" name="p_worth" placeholder="Rupiah">
        </div>
        <div>
            <label>Description</label>
            <input type="text" id="p_desc" name="p_desc">
        </div>
        <div>
            <label>Age</label>
            <input type="text" id="p_age" name="p_age">
        </div>
        <div>
            <label>Category</label>
            <input type="text" id="p_category" name="p_category">
        </div>
        <div>
            <input type="submit" value="Update Item">
        </div>
    </form>
@stop

@extends('layouts.index')

@section('title', 'Add Item')
