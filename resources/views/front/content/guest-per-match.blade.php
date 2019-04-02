@extends('front.partials.layout')

@section('title')
Result
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
            <img src="{{ asset('front/banner-header.jpg') }}" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                    <h1 class="h1" style="padding:0; margin:0;">Result Match {{ $match }}</h1>
                    @php
                    $namatournament = App\Tournament::where('id', $id_tournament)->first();
                    @endphp
                    <h3 style="padding:0;">{{ $namatournament->nama }}</h3>
                
                
                
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

<section style="background:black; padding:40px 0px;">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Team</th>
                                    <th>Ranking In Game</th>
                                    <th>Total Kills</th>
                                    <th>Total Scores</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($scores as $score)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $score->team_name }}</td>
                                    <td>{{ $score->rank }}</td>
                                    <td>{{ $score->kills}} Kills</td>
                                    <td>{{ $score->score }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</section>
            
            
            
</div>
@endsection