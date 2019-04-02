@extends('front.partials.layout')

@section('title')
Add New Tournament
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
                
                
                    <h1 class="h1">Add Tournament</h1>
                
                
                
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

        

        
    <div class="container youplay-content">
    <form action="{{ route('front.addTournament.post') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <!-- Billing Information -->
            <h2 class="mt-0">Step 1 - Tournament Details</h2>
            <h4>Maximal 25 Teams. [ Example : Tournament ABC - Group A, Tournament ABC - Group B ]</h4>
            <br>
            <!-- Country -->
            <div class="row">
                <div class="col-md-12">
                    <p>Tournament Name :</p>
                    <div class="youplay-input">
                        <input type="text" name="nama" placeholder="Tournament Name" required>
                    </div>
                </div>
            </div>

            <!-- Country -->
            <div class="row">
                <div class="col-md-12">
                    <p>Tournament Details :</p>
                    <div class="youplay-input">
                        <input type="text" name="deskripsi" placeholder="Tournament Details" required>
                    </div>
                </div>
            </div>

            <!-- Country -->
            <div class="row">
                <div class="col-md-6">
                    <p>Total Matches (Max: 10 Matches) :</p>
                    <div class="youplay-input">
                        <input type="number" max="10" name="total_match" placeholder="Total Matches" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Total Teams (Max: 25 Teams) :</p>
                    <div class="youplay-input">
                        <input type="number" max="25" name="total_team" placeholder="Total Teams" required>
                    </div>
                </div>
            </div>



            <!-- Order Button -->
            <div class="align-right">
                <input type="submit" name="submit" value="Submit" class="btn btn-lg" style="border:2px solid white;">
            </div>
            <!-- /Order Button -->
    </form>
        </div>

    </div>
@endsection