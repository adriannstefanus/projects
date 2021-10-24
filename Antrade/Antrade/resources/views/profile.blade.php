{{--@section('content')--}}

{{--    <div class="mx-auto container" style="display: block; width: 100vh">--}}

{{--        <div class="title font-weight-bold">--}}
{{--            <h1>Edit Profile</h1>--}}
{{--        </div>--}}

{{--    <form method="POST" action="{{'/changeProfile'}}" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--                    <div class="rightGrid">--}}
{{--                        <form>--}}
{{--                            <div class="info">--}}
{{--                                <h3>Profile Detail</h3>--}}
{{--                                <br><input type="text" id="p_name" name="p_name" placeholder="Name"><br>--}}
{{--                                <br><input type="text" id="p_address" name="p_address" placeholder="Address"><br>--}}
{{--                                <br><input type="text" id="p_phone" name="p_phone" placeholder="Phone Number"><br>--}}
{{--                                <br><input type="file" id="p_image" name="p_image"><br>--}}
{{--                                <br><input type="submit" value="Update Profile"><br>--}}
{{--                            </div>--}}

{{--                            <button onclick="buttonOnClick()" type="submit" id="submit" name="button">Submit</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--    </form>--}}
{{--@stop--}}
{{--@extends('layouts.index')--}}

{{--@section('title', 'Edit Profile')--}}

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

@section('title', 'Edit Profile')
