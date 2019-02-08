@extends('front.partials.layout')

@section('title')
Home
@endsection

@section('content')
    <!-- Registration Form -->
    <div id="nav-registration" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Register</h4>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div>
                            <p>Username:</p>
                            <div class="youplay-input">
                                <input type="text" name="user_login" />
                            </div>

                            <p>E-mail:</p>
                            <div class="youplay-input">
                                <input type="text" name="user_email" />
                            </div>

                            <p>
                                <em>A password will be e-mailed to you.</em>
                            </p>

                            <button class="btn ml-3" name="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Registration Form -->



    

    <div class="content-wrap">
        
            <!--
    Banner

    Additional classes:
        .small
        .xsmall
        .big
        .full
-->
<section class="youplay-banner banner-top big">
    
        <div class="image">
            <img src="{{ asset('front/assets/images/banner.jpg') }}" alt="">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                <div class="text-center">
                    <h1 style="margin-bottom:10px;">PUBG Calculator</h1>
                    <h3 style="margin-bottom:30px;">Manage your tournament a lot easier</h3>
                    <a class="btn btn-md" href="/add-tournament"><i class="fa fa-play-circle"></i>&nbsp; Start Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

        

        
    <!-- Realistic Battles -->
    <section class="youplay-banner big">
        <div class="image" data-speed="0.4">
            <img class="jarallax-img" src="{{ asset('front/assets/images/banner2.jpg') }}" alt="">
        </div>

        <div class="info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="fs-40">Confused with how to calculate pubg points ?</h2>
                            <p class="lead">We make PUBG Calculator to make it easier for you to calculate and manage PUBG tournaments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Realistic Battles -->


    <!-- The True Emotions -->
    <section class="container mt-120">
        <div class="row">
            <div class="col-xs-12">
                <img src="{{ asset('front/assets/images/banner3.jpg') }}" alt="">
                <h2 class="fs-40">How To Use</h2>
                <p class="lead">You need to Register and Login first and then you can make tournament and enter the tournament details, then fill in the team's data and the team's score points. Participants can see points easily.</p>
            </div>
        </div>
    </section>
    <!-- /The True Emotions -->


    <!-- Preorder -->
    <section class="youplay-banner big mt-120" id="preorder">
        <div class="image" data-speed="0.4">
            <img class="jarallax-img" src="{{ asset('front/assets/images/banner5.jpg') }}" alt="">
        </div>

        <div class="info container align-center">
            <div>
                <h2>Free To Use</h2>
                <h3>We make it Free and Easy for you to use PUBG Calculator</h3>

                <br><br>
                <a class="btn btn-lg" href="#">Start Now</a>
            </div>
        </div>
    </section>
    <!-- /Preorder -->
@endsection