@extends('layouts.app')

@section('content')
<div class="container">
    <!-- About Section -->
    <div id="about">
        <div class="section-title text-center center">
            <h2>About Me</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-8"> <img src="{{asset('img/bartender.png')}}" class="img-responsive" alt="" style="border-radius: 50px;margin-left:50px;padding-left: 20px;"> </div>
            <div class="col-4">
                <div class="about-text" style="margin-top: 30%;">
                    <h3><u>Id:</u> {{$user->id}}</h3>
                    <h3><u>Name:</u> {{$user->name}}</h3>
                    <h3><u>Phone:</u> {{$user->phone}}</h3>
                    <h3><u>Email:</u> {{$user->email}}</h3>
                    <h3><u>Date of birth:</u> {{$user->dateofbirth}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
