@section('content')
    <div class="container border">
        <div class="row" style="padding-top: 20px">
            <div class="card border-dark mb-3 col-md-2" >
                <img src="/{{$user->user_image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <p class="card-text">{{$user->address}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$user->phone}}</li>
                    <li class="list-group-item">{{$user->email}}</li>
                </ul>
                <div class="card-body">
                    <a href="/editprofile" class="card-link">Edit Profile</a>
                </div>
            </div>


            <div class="carousel slide col-9" data-ride="carousel" id="carouselExampleIndicators" style="padding-top: 20px; padding-left: 90px">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="height: 450px">
                        <div class="carousel-item active">
                            <img src="assets/slideAntrade.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/rusuh.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/keyblade.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-md-2">--}}
{{--                        @foreach($product as $p)--}}
{{--                                <div>--}}
{{--                                <a href="/productdetail/{{$p->productcode}}" style="display: inline-block">--}}
{{--                                    <img src="/{{$p->product_image}}" width="223px">--}}
{{--                                    <label>{{$p->product_name}}</label>--}}
{{--                                    <label>{{$p->description}}</label></a><br>--}}
{{--                                    <label>{{$p->name}}</label>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}

            <br>
            <br>
            <div>
                <?php $i=0;?>
                @foreach($product as $p)
                    <?php if($i%3 === 0) echo '<div class="row">' ?>
                    <div style="width: 389px; position: center; padding-left: 75px; padding-bottom: 50px" class="align-self-end">
                        <td>
                            <div style="width: 250px; height: 395px"  class="border border-primary">
                            <a rel="gallery" href="/productdetail/{{$p->productcode}}"><img src="/{{$p->product_image}}" style="width: 250px;"  class="img-responsive">
                                <br>
                            <div style="text-align: center; vertical-align: bottom" >
                                <br>
                            Product Name : {{$p->product_name}}<br>
                            Seller       : {{$p->name}}

                            </div>
                            </a>
                            </div>

                        </td>
                    </div>

                    <?php if($i%3 === 2) echo '</div>' ?>
                    <?php $i++?>
                @endforeach
            </div>
            {{$product->links()}}
        </div>
    </div>
@stop

@extends('layouts.index')

@section('title', 'Main Page')


