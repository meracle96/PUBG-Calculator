@extends('front.partials.layout')

@section('title')
My Tournaments
@endsection

@section('content')
<div class="content-wrap">
    <section class="youplay-banner banner-top youplay-banner-parallax small">
        <div class="image" data-speed="0.4">
            <img src="front/banner-header.jpg" alt="" class="jarallax-img">
        </div>
        <div class="info">
            <div>
                <div class="container">
                        <h1 class="h1">My Tournaments</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->

    <div class="container youplay-news">
        <!-- News List -->
        <div class="col-md-12">
            @forelse($tournaments as $tournament)
            <!-- Single News Block -->
            <div class="news-one">
                <div class="row vertical-gutter">
                    <div class="col-md-4">
                        <a href="{{ route('front.tournamentsDetail', ['id' => $tournament->id]) }}" class="angled-img">
                            <div class="img">
                                <img src="front/tourney.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="clearfix" style="margin-top:20px;">
                            <h2 class="h2 pull-left m-0" style="text-transform:uppercase;"><a href="{{ route('front.tournamentsDetail', ['id' => $tournament->id]) }}">{{ $tournament->nama }}</a></h2>
                            <span class="date pull-right"><i class="fa fa-calendar"></i> Created at : {{ $tournament->created_at->diffForHumans() }}</span>
                        </div>
                        <h3>Total Teams : {{ $tournament->total_team }} | Total Matches : {{ $tournament->total_match }}</h3>
                        <div class="description">
                            <p>
                                {{ $tournament->deskripsi }}
                            </p>
                        </div>
                        <a href="{{ route('front.tournamentsDetail', ['id' => $tournament->id]) }}" class="btn read-more pull-left">Manage Tournament</a>
                    </div>
                </div>
            </div>
            <!-- /Single News Block -->
            @empty
            <h1>You didnt have any Tournament.<br> Add Tournament <a href="/add-tournament">Here</a></h1>
            @endforelse
            <br>
            <div class="row">
                <div class="col-md-12">
                    {{ $tournaments->links() }}
                </div>
            </div>

            <!-- Pagination -->
            <!-- <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul> -->
            <!-- /Pagination -->
        </div>
    </div>
</div>
@endsection