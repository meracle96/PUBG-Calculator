<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Team;
use App\Point;
use Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        return view('front.content.home');
    }

    public function addTournament()
    {
        return view('front.content.add-tournament');
    }

    public function addTournamentPost(Request $request)
    {
        $tournament = new Tournament;

        $tournament->user_id = Auth::user()->id;
        $tournament->nama = $request->nama;
        $tournament->deskripsi = $request->deskripsi;
        $tournament->total_match = $request->total_match;
        $tournament->total_team = $request->total_team;
        $tournament->save();

        $id_tournament = $tournament->id;

        return redirect()->route('front.addTeams')->with('id_tournament', $id_tournament);
    }

    public function addTeams(Request $request)
    {
        $id_tournament = $request->session()->get('id_tournament');
        if($id_tournament == NULL) {
            return redirect()->route('front.home');
        }
        return view('front.content.add-team', compact('id_tournament'));
    }

    public function addTeamsPost(Request $request)
    {
        $team = new Team;
        $team->tournament_id = $request->tournament_id;
        $team->team1 = $request->team1;
        $team->team2 = $request->team2;
        $team->team3 = $request->team3;
        $team->team4 = $request->team4;
        $team->team5 = $request->team5;
        $team->team6 = $request->team6;
        $team->team7 = $request->team7;
        $team->team8 = $request->team8;
        $team->team9 = $request->team9;
        $team->team10 = $request->team10;
        $team->team11 = $request->team11;
        $team->team12 = $request->team12;
        $team->team13 = $request->team13;
        $team->team14 = $request->team14;
        $team->team15 = $request->team15;
        $team->team16 = $request->team16;
        $team->team17 = $request->team17;
        $team->team18 = $request->team18;
        $team->team19 = $request->team19;
        $team->team20 = $request->team20;
        $team->team21 = $request->team21;
        $team->team22 = $request->team22;
        $team->team23 = $request->team23;
        $team->team24 = $request->team23;
        $team->team25 = $request->team25;
        $team->save();

        $id_tournament = $team->tournament_id;

        return redirect()->route('front.addPoint')->with('id_tournament', $id_tournament);
    }

    public function addPoint(Request $request)
    {
        $id_tournament = $request->session()->get('id_tournament');
        if($id_tournament == NULL) {
            return redirect()->route('front.home');
        }
        return view('front.content.add-point', compact('id_tournament'));
    }

    public function addPointPost(Request $request)
    {
        $point = new Point;
        $point->tournament_id = $request->tournament_id;
        $point->point_team1 = $request->point_team1;
        $point->point_team2 = $request->point_team2;
        $point->point_team3 = $request->point_team3;
        $point->point_team4 = $request->point_team4;
        $point->point_team5 = $request->point_team5;
        $point->point_team6 = $request->point_team6;
        $point->point_team7 = $request->point_team7;
        $point->point_team8 = $request->point_team8;
        $point->point_team9 = $request->point_team9;
        $point->point_team10 = $request->point_team10;
        $point->point_team11 = $request->point_team11;
        $point->point_team12 = $request->point_team12;
        $point->point_team13 = $request->point_team13;
        $point->point_team14 = $request->point_team14;
        $point->point_team15 = $request->point_team15;
        $point->point_team16 = $request->point_team16;
        $point->point_team17 = $request->point_team17;
        $point->point_team18 = $request->point_team18;
        $point->point_team19 = $request->point_team19;
        $point->point_team20 = $request->point_team20;
        $point->point_team21 = $request->point_team21;
        $point->point_team22 = $request->point_team22;
        $point->point_team23 = $request->point_team23;
        $point->point_team24 = $request->point_team23;
        $point->point_team25 = $request->point_team25;
        $point->point_per_kill = $request->point_per_kill;
        $point->save();

        return redirect()->route('front.home');
    }

    public function tournaments()
    {
        $user = Auth::user();
        $tournaments = Tournament::where('user_id', $user->id)->latest()->paginate(10);
        return view('front.content.tournaments', compact('tournaments'));
    }
}
