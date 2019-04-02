@extends('front.partials.layout')

@section('title')
{{ $tournament->nama }}
@endsection

@section('content')
<div class="content-wrap no-banner">
        

        
    <h1 class="container">{{ $tournament->nama }}</h1>

    <div class="container youplay-news youplay-post">

        <!-- Review Rating -->
        <div class="youplay-review-rating">
            <div class="row">
                <div class="col-md-4">
                    <div class="img">
                        <img src="{{ asset('front/tourney.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="mt-0">Description</h2>
                    <h3>{{ $tournament->deskripsi }}</h3>
                </div>
                <div class="col-md-4">
                    <h2 class="mt-0">Total Team and Matches</h2>
                    <ul>
                        <li> <h3>- {{ $tournament->total_match }} Matches</h3></li>
                        <li> <h3>- {{ $tournament->total_team }} Teams</h3></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Review Rating -->
        
        <br>

        <!-- Post Info -->
        <article class="news-one">

            <!-- Post Text -->
            <div class="description">

                <h2>Match Data</h2>
                <h4>Fill in forms below.</h4>

                <hr>

                @for ($i = 1; $i <= $tournament->total_match; $i++)
                    @php
                        $hasil = App\Result::where('tournament_id', $tournament->id)->where('match', $i)->first();
                    @endphp

                    @if($hasil != NULL)
                    <h3>Match {{ $i }} Result : <a href="{{ route('guest.resultPerMatch', ['id_tournament' => $tournament->id, 'match' => $i]) }}" style="color:blue;" target="_blank">{{ route('guest.resultPerMatch', ['id_tournament' => $tournament->id, 'match' => $i]) }}</a></h3>
                    <hr>
                    @endif

                    @php
                        $hitung = App\Result::where('tournament_id', $tournament->id)->get();
                        $jumlahmatchdone = count($hitung);
                    @endphp

                    @if($hasil == NULL)
                    <div class="row">
                        <form action="{{ route('front.tournamentsDetailPost', ['id' => $tournament->id]) }}" method="POST">
                            {{ csrf_field() }}
                            <h3>Match {{ $i }} Data</h3>
                            <input type="hidden" value="{{ $i }}" name="match">
                            <input type="hidden" value="{{ $tournament->id }}" name="tournament_id">
                            
                            @php
                            $teams = App\Team::where('tournament_id', $tournament->id)->first();
                            @endphp

                            @for ($j = 1; $j <= $tournament->total_team; $j++)
                            <div class="col-md-6"
                                @if(($j % 2) == 0)
                                @else
                                style='border-right:1px solid white;'
                                @endif
                            >
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Ranking {{ $j }} </label>
                                            <select name="rangking_name_{{ $j }}" id="" class="form-control" required>
                                                @if($teams->team1 != NULL)
                                                <option value="{{ $teams->team1}}">{{ $teams->team1 }}</option>
                                                @endif
                                                @if($teams->team2 != NULL)
                                                <option value="{{ $teams->team2}}">{{ $teams->team2 }}</option>
                                                @endif
                                                @if($teams->team3 != NULL)
                                                <option value="{{ $teams->team3}}">{{ $teams->team3 }}</option>
                                                @endif
                                                @if($teams->team4 != NULL)
                                                <option value="{{ $teams->team4}}">{{ $teams->team4 }}</option>
                                                @endif
                                                @if($teams->team5 != NULL)
                                                <option value="{{ $teams->team5}}">{{ $teams->team5 }}</option>
                                                @endif
                                                @if($teams->team6 != NULL)
                                                <option value="{{ $teams->team6}}">{{ $teams->team6 }}</option>
                                                @endif
                                                @if($teams->team7 != NULL)
                                                <option value="{{ $teams->team7}}">{{ $teams->team7 }}</option>
                                                @endif
                                                @if($teams->team8 != NULL)
                                                <option value="{{ $teams->team8}}">{{ $teams->team8 }}</option>
                                                @endif
                                                @if($teams->team9 != NULL)
                                                <option value="{{ $teams->team9}}">{{ $teams->team9 }}</option>
                                                @endif
                                                @if($teams->team10 != NULL)
                                                <option value="{{ $teams->team10}}">{{ $teams->team10 }}</option>
                                                @endif
                                                @if($teams->team11 != NULL)
                                                <option value="{{ $teams->team11}}">{{ $teams->team11 }}</option>
                                                @endif
                                                @if($teams->team12 != NULL)
                                                <option value="{{ $teams->team12}}">{{ $teams->team12 }}</option>
                                                @endif
                                                @if($teams->team13 != NULL)
                                                <option value="{{ $teams->team13}}">{{ $teams->team13 }}</option>
                                                @endif
                                                @if($teams->team14 != NULL)
                                                <option value="{{ $teams->team14}}">{{ $teams->team14 }}</option>
                                                @endif
                                                @if($teams->team15 != NULL)
                                                <option value="{{ $teams->team15}}">{{ $teams->team15 }}</option>
                                                @endif
                                                @if($teams->team16 != NULL)
                                                <option value="{{ $teams->team16}}">{{ $teams->team16 }}</option>
                                                @endif
                                                @if($teams->team17 != NULL)
                                                <option value="{{ $teams->team17}}">{{ $teams->team17 }}</option>
                                                @endif
                                                @if($teams->team18 != NULL)
                                                <option value="{{ $teams->team18}}">{{ $teams->team18 }}</option>
                                                @endif
                                                @if($teams->team19 != NULL)
                                                <option value="{{ $teams->team19}}">{{ $teams->team19 }}</option>
                                                @endif
                                                @if($teams->team20 != NULL)
                                                <option value="{{ $teams->team20}}">{{ $teams->team20 }}</option>
                                                @endif
                                                @if($teams->team21 != NULL)
                                                <option value="{{ $teams->team21}}">{{ $teams->team21 }}</option>
                                                @endif
                                                @if($teams->team22 != NULL)
                                                <option value="{{ $teams->team22}}">{{ $teams->team22 }}</option>
                                                @endif
                                                @if($teams->team23 != NULL)
                                                <option value="{{ $teams->team23}}">{{ $teams->team23 }}</option>
                                                @endif
                                                @if($teams->team24 != NULL)
                                                <option value="{{ $teams->team24}}">{{ $teams->team24 }}</option>
                                                @endif
                                                @if($teams->team25 != NULL)
                                                <option value="{{ $teams->team25}}">{{ $teams->team25 }}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total Kill in Match {{ $j }}</label>
                                            <input type="number" name="total_kill_{{$j}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor

                            <div class="row">
                                <div class="col-md-12"  style="margin-top:10px;">
                                    <input type="submit" name="submit" id="" value="Submit" style="border:2px solid white;" class="btn btn-lg pull-right">
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                    <hr>
                    @endif

                @endfor

                @if($jumlahmatchdone == $tournament->total_match)
                <h3>Final Result : <a href="{{ route('guest.finalScore', ['id_tournament' => $tournament->id]) }}" style="color:blue;" target="_blank">Click To See</a></h3>
                <hr>
                @else
                <h3>Final Result : <a href="#" style="color:blue;" onclick="alert('You need to fill in all match data first.')">Click To See</a></h3>
                <hr>
                @endif

            </div>

        </article>
        <!-- /Post Info -->


    </div>

        
    </div>
@endsection