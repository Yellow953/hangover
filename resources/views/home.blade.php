@extends('layouts.app')

@section('content')
<div>
    <nav class="m-0 p-0" style="width: 10%; top: 10%; left: 90%; position:fixed">
        <div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#page-top" class="page-scroll text-white btn btn-primary my-5">Home</a></li>
                    <li><a href="#about" class="page-scroll text-white btn btn-primary my-5">About</a></li>
                    <li><a href="#portfolio" class="page-scroll text-white btn btn-primary my-5">Menu</a></li>
                    <li><a href="#contact" class="page-scroll text-white btn btn-primary my-5">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1>Hangover</h1>
                        <p>Bar • Pub • Resto</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <div id="about" class="container">
        <div class="section-title text-center center">
            <h2>About Me</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col"> <img src="{{asset('img/bartender.png')}}" class="img-responsive" alt="" style="border-radius: 50px;margin-left:50px;padding-left: 20px;"> </div>
            <div class="col">
                <div class="about-text" style="text-align: center;margin-top: 20%;">
                    <h3><u>Name:</u> {{auth()->user()->name}}</h3>
                    <a href="/portfolio/{{auth()->user()->id}}" class="btn btn-default btn-lg page-scroll" style="border-radius: 50px;">My Portfolio</a> </div>
                </div>
            </div>
    </div>

    <div id="portfolio" class="container py-2 pb-5" >
            <div class="section-title text-center center">
                <h1 class="text-primary"><u>Menu:</u></h1>
            </div>

            <div class="row">
                <div class="col-8">
                    <img src="{{asset('img/menu.png')}}" alt="" width="100%" style="margin-left:20px;border-radius: 15%">
                </div>
                <div class="col-4">
                    <div style=" margin-left: 5%; margin-top: 60% ;width: 80%;">
                        <a href="/menu" class="btn btn-primary" style="border-radius: 50px; width: 100%"><h1>Details</h1></a>
                        <h3 class="text-dark" style="padding-left: 5%">Click on the button to see the more details about the menu...</h3>
                    </div>
                </div>
            </div>
    </div>


    <!-- Contact Section -->
    <div id="contact" class="container text-center">
            <div class="section-title center">
                <h2>Get In Touch</h2>
                <hr>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-default btn-lg">Send Message</button>
                </form>
                <div class="social">
                    <ul>
                        <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://github.com"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://codepen.io"><i class="fa fa-codepen"></i></a></li>
                    </ul>
                </div>
            </div>
    </div>

    <div class="container" id="footer">
        <div class="text-center">
            <div class="fnav">
                <p>Copyright &copy; 2022 Hangover. Designed by <a href="#">Joe953</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection
