<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Result;
use App\Tournament;
use DB;

class GuestController extends Controller
{
    public function perMatch($id_tournament, $match)
    {
        $scores = Score::where('tournament_id', $id_tournament)->where('match', $match)->orderBy('score', 'desc')->get();
        $results = Result::where('tournament_id', $id_tournament)->where('match', $match)->first();

        if($scores->isEmpty()) {
            return abort(404);
        } else {
            return view('front.content.guest-per-match', compact('scores', 'match', 'id_tournament', 'results'));
        }
    }

    public function finalScore($id_tournament)
    {
        $tournament = Tournament::where('id', $id_tournament)->first();
        $scores = Score::where('tournament_id', $id_tournament)->get();
        $results = Result::where('tournament_id', $id_tournament)->first();
        $finals = DB::table('finals')->where('tournament_id', $id_tournament)->orderBy('score', 'desc')->get();

        if($results == NULL) {
            return abort(404);
        } else {
            return view('front.content.guest-final', compact('scores', 'id_tournament', 'results', 'tournament', 'finals'));
        }
    }
}
