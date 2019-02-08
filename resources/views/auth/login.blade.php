@extends('front.partials.layout')

@section('title')
Login
@endsection

@section('content')
<div class="content-wrap">
        
            <!--
    Banner

    Additional classes:
        .small
        .xsmall
        .big
        .full
-->
<section class="youplay-banner banner-top youplay-banner-parallax">
    
        <div class="image" data-speed="0.4">
            <img src="{{ asset('front/assets/images/banner.jpg') }}" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                
                    
    <div class="youplay-login">
        <div class="youplay-form text-center">
            <h1>Login</h1>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                <br>
            @endif

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                <br>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="youplay-input">
                    <input type="text" name="email" placeholder="Email" required>
                    
                </div>
                <div class="youplay-input">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button class="btn btn-default db">Login</button>
            </form>
        </div>
    </div>

                
                
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

        
    </div>
@endsection
