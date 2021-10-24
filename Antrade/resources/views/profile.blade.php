@section('content')
    <form method="POST" action="{{'/changeProfile'}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Nama </label>
            <input type="text" id="p_name" name="p_name">
        </div>
        <div>
            <label>Address </label>
            <input type="text" id="p_address" name="p_address">
        </div>
        <div>
            <label>Phone </label>
            <input type="text" id="p_phone" name="p_phone">
        </div>
        <div>
            <label>Image </label>
            <input type="file" id="p_image" name="p_image">
        </div>
        <div>
            <input type="submit" value="Update Profile">
        </div>
    </form>
@stop
@extends('layouts.index')

@section('title', 'Add Item')
