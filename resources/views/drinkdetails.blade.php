@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="section-title text-center center">
                <h2>Drink</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col"> <img src="{{asset($drink->source)}}" class="img-responsive" alt="" style="border-radius: 50px;margin-left:50px;padding-left: 20px;"> </div>
                <div class="col">
                    <div class="about-text text-center" style="margin-top: 15%; color: black;">
                        <h2><u>Name:</u> {{$drink->name}}</h2>
                        <h2><u>Type:</u> {{$drink->type}}</h2>
                        <h2><u>price:</u> {{$drink->price}}$</h2>
                        <a href="/menu/{{ $drink->id }}/edit" class="btn btn-primary px-5 py-3" style="border-radius: 50px; width: 200px;">Order</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
