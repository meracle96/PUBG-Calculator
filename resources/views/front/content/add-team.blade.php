@extends('front.partials.layout')

@section('title')
Add Team Data
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
<section class="youplay-banner banner-top youplay-banner-parallax xsmall">
    
        <div class="image" data-speed="0.4">
            <img src="assets/images/dark/banner-blog-bg.jpg" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                    <h1 class="h1">Add Team</h1>
                
                
                
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

        

        
    <div class="container youplay-content">
    <form action="{{ route('front.addTeams.post') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <!-- Billing Information -->
            <h2 class="mt-0">Step 2 - Tournament Team Details</h2>

            @php
            $tournament = App\Tournament::find($id_tournament);
            @endphp

            <!-- Country -->
            <div class="row">
                @for ($i = 0; $i < $tournament->total_team; $i++)
                <div class="col-md-6">
                    <p>Team {{ $i+1 }} :</p>
                    <div class="youplay-input">
                        <input type="hidden" name="tournament_id" value="{{ $id_tournament }}">
                        <input type="text" name="team{{ $i+1 }}" placeholder="Team {{ $i+1 }} Name" required>
                    </div>
                </div>
                @endfor
            </div>
            
            <div class="row" style="margin-top:20px;">
                <!-- Order Button -->
                <div class="align-right">
                    <input type="submit" name="submit" value="Submit" class="btn btn-lg" style="border:2px solid white;">
                </div>
                <!-- /Order Button -->
            </div>
    </form>

    </div>
@endsection