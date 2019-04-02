@extends('front.partials.layout')

@section('title')
Add Point Data
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
                <img src="front/banner-header.jpg" alt="" class="jarallax-img">
            </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                    <h1 class="h1">Add Point Data</h1>
                
                
                
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

        

        
    <div class="container youplay-content">
    <form action="{{ route('front.addPoint.post') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <!-- Billing Information -->
            <h2 class="mt-0">Step 3 - Tournament Point Details</h2>

            @php
            $tournament = App\Tournament::find($id_tournament);
            @endphp

            <!-- Country -->
            <div class="row">
                @for ($i = 0; $i < $tournament->total_team; $i++)
                <div class="col-md-6">
                    <p>Points Ranking {{ $i+1 }} :</p>
                    <div class="youplay-input">
                        <input type="hidden" name="tournament_id" value="{{ $id_tournament }}">
                        <input type="number" name="point_team{{ $i+1 }}" placeholder="Points Ranking {{ $i+1 }}" required>
                    </div>
                </div>
                @endfor
                <div class="col-md-12">
                    <p>Points Per Kill :</p>
                    <div class="youplay-input">
                        <input type="number" name="point_per_kill" placeholder="Points Per Kill" required>
                    </div>
                </div>
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