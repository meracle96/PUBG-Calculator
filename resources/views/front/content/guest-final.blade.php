@extends('front.partials.layout')

@section('title')
Result
@endsection

@section('content')

<style>
    th, td {
        text-align: center;
    }
</style>

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
                
                
                    <h1 class="h1" style="padding:0; margin:0;">Final Result</h1>
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
                    <div class="col-md-12">
                        <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h1>Final Result</h1>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Team</th>
                                                <th>Total Kills In All Game</th>
                                                <th>Total Scores In All Game</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($finals as $final)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $final->team_name }}</td>
                                                <td>{{ $final->kills }} Kills</td>
                                                <td>{{ $final->score }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>
                            </div>
                        @for ($i = 1; $i <= $tournament->total_match; $i++)

                        @php
                        $score2 = App\Score::where('tournament_id', $id_tournament)->where('match', $i)->orderBy('score', 'desc')->get();
                        @endphp

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h1>Match Data Game {{ $i }}</h1>
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
                                        @foreach($score2 as $score2final)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $score2final->team_name }}</td>
                                            <td>{{ $score2final->rank }}</td>
                                            <td>{{ $score2final->kills}} Kills</td>
                                            <td>{{ $score2final->score }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                        </div>
                        @endfor

                        
                    </div>
                </div>
            </div>
</section>
            
</div>
@endsection