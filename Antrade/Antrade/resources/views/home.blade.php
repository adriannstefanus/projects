@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <div>
                    @foreach($result as $r)
                        <tr>
                            <td>{{$r->name}}</td>
                            <td>{{$r->email}}</td>
                            <td>{{$r->tag}}</td>
                        </tr>
                        @endforeach
                        </div>
                </div>
                {{$result->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
