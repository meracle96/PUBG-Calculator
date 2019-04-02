<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Team;
use App\Point;
use App\Result;
use App\Score;
use DB;
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

        return redirect()->route('front.tournaments');
    }

    public function tournaments()
    {
        $user = Auth::user();
        $tournaments = Tournament::where('user_id', $user->id)->latest()->paginate(10);
        return view('front.content.tournaments', compact('tournaments'));
    }

    public function tournamentsDetail($id)
    {
        $tournament = Tournament::where('id', $id)->first();
        if($tournament->user_id != Auth::user()->id) {
            return back();
        } else {
            return view('front.content.tournaments-detail', compact('tournament'));
        }
    }

    public function tournamentsDetailPost($id, Request $request)
    {
        $point = Point::where('tournament_id', $id)->first();

        $result = new Result;
        $result->tournament_id = $id;
        $result->match = $request->match;

        // Simpan Nama Tim Sesuai Ranking
        if ($request->rangking_name_1 != NULL) {
            $result->ranking_name_1 = $request->rangking_name_1;
        }

        if ($request->rangking_name_2 != NULL) {
            $result->ranking_name_2 = $request->rangking_name_2;
        }

        if ($request->rangking_name_3 != NULL) {
            $result->ranking_name_3 = $request->rangking_name_3;
        }

        if ($request->rangking_name_4 != NULL) {
            $result->ranking_name_4 = $request->rangking_name_4;
        }

        if ($request->rangking_name_5 != NULL) {
            $result->ranking_name_5 = $request->rangking_name_5;
        }

        if ($request->rangking_name_6 != NULL) {
            $result->ranking_name_6 = $request->rangking_name_6;
        }

        if ($request->rangking_name_7 != NULL) {
            $result->ranking_name_7 = $request->rangking_name_7;
        }

        if ($request->rangking_name_8 != NULL) {
            $result->ranking_name_8 = $request->rangking_name_8;
        }

        if ($request->rangking_name_9 != NULL) {
            $result->ranking_name_9 = $request->rangking_name_9;
        }

        if ($request->rangking_name_10 != NULL) {
            $result->ranking_name_10 = $request->rangking_name_10;
        }

        if ($request->rangking_name_11 != NULL) {
            $result->ranking_name_11 = $request->rangking_name_11;
        }

        if ($request->rangking_name_12 != NULL) {
            $result->ranking_name_12 = $request->rangking_name_12;
        }

        if ($request->rangking_name_13 != NULL) {
            $result->ranking_name_13 = $request->rangking_name_13;
        }

        if ($request->rangking_name_14 != NULL) {
            $result->ranking_name_14 = $request->rangking_name_14;
        }

        if ($request->rangking_name_15 != NULL) {
            $result->ranking_name_15 = $request->rangking_name_15;
        }

        if ($request->rangking_name_16 != NULL) {
            $result->ranking_name_16 = $request->rangking_name_16;
        }

        if ($request->rangking_name_17 != NULL) {
            $result->ranking_name_17 = $request->rangking_name_17;
        }

        if ($request->rangking_name_18 != NULL) {
            $result->ranking_name_18 = $request->rangking_name_18;
        }

        if ($request->rangking_name_19 != NULL) {
            $result->ranking_name_19 = $request->rangking_name_19;
        }
        
        if ($request->rangking_name_20 != NULL) {
            $result->ranking_name_20 = $request->rangking_name_20;
        }

        if ($request->rangking_name_21 != NULL) {
            $result->ranking_name_21 = $request->rangking_name_21;
        }

        if ($request->rangking_name_22 != NULL) {
            $result->ranking_name_22 = $request->rangking_name_22;
        }

        if ($request->rangking_name_23 != NULL) {
            $result->ranking_name_23 = $request->rangking_name_23;
        }

        if ($request->rangking_name_24 != NULL) {
            $result->ranking_name_24 = $request->rangking_name_24;
        }

        if ($request->rangking_name_25 != NULL) {
            $result->ranking_name_25 = $request->rangking_name_25;
        }


        // Jumlah Kill
        if ($request->total_kill_1 != NULL) {
            $result->ranking_kill_1 = $request->total_kill_1;
        }

        if ($request->total_kill_2 != NULL) {
            $result->ranking_kill_2 = $request->total_kill_2;
        }

        if ($request->total_kill_3 != NULL) {
            $result->ranking_kill_3 = $request->total_kill_3;
        }

        if ($request->total_kill_4 != NULL) {
            $result->ranking_kill_4 = $request->total_kill_4;
        }

        if ($request->total_kill_5 != NULL) {
            $result->ranking_kill_5 = $request->total_kill_5;
        }

        if ($request->total_kill_6 != NULL) {
            $result->ranking_kill_6 = $request->total_kill_6;
        }

        if ($request->total_kill_7 != NULL) {
            $result->ranking_kill_7 = $request->total_kill_7;
        }

        if ($request->total_kill_8 != NULL) {
            $result->ranking_kill_8 = $request->total_kill_8;
        }

        if ($request->total_kill_9 != NULL) {
            $result->ranking_kill_9 = $request->total_kill_9;
        }

        if ($request->total_kill_10 != NULL) {
            $result->ranking_kill_10 = $request->total_kill_10;
        }

        if ($request->total_kill_11 != NULL) {
            $result->ranking_kill_11 = $request->total_kill_11;
        }

        if ($request->total_kill_12 != NULL) {
            $result->ranking_kill_12 = $request->total_kill_12;
        }

        if ($request->total_kill_13 != NULL) {
            $result->ranking_kill_13 = $request->total_kill_13;
        }

        if ($request->total_kill_14 != NULL) {
            $result->ranking_kill_14 = $request->total_kill_14;
        }

        if ($request->total_kill_15 != NULL) {
            $result->ranking_kill_15 = $request->total_kill_15;
        }

        if ($request->total_kill_16 != NULL) {
            $result->ranking_kill_16 = $request->total_kill_16;
        }

        if ($request->total_kill_17 != NULL) {
            $result->ranking_kill_17 = $request->total_kill_17;
        }

        if ($request->total_kill_18 != NULL) {
            $result->ranking_kill_18 = $request->total_kill_18;
        }

        if ($request->total_kill_19 != NULL) {
            $result->ranking_kill_19 = $request->total_kill_19;
        }
        
        if ($request->total_kill_20 != NULL) {
            $result->ranking_kill_20 = $request->total_kill_20;
        }

        if ($request->total_kill_21 != NULL) {
            $result->ranking_kill_21 = $request->total_kill_21;
        }

        if ($request->total_kill_22 != NULL) {
            $result->ranking_kill_22 = $request->total_kill_22;
        }

        if ($request->total_kill_23 != NULL) {
            $result->ranking_kill_23 = $request->total_kill_23;
        }

        if ($request->total_kill_24 != NULL) {
            $result->ranking_kill_24 = $request->total_kill_24;
        }

        if ($request->total_kill_25 != NULL) {
            $result->ranking_kill_25 = $request->total_kill_25;
        }


        // Simpan Point Rangking per Tim per Match
        if ($request->rangking_name_1 != NULL) {
            $result->ranking_point_1 = $point->point_team1;

            $total1 = $point->point_team1 + ($request->total_kill_1 * $point->point_per_kill); 
            $result->ranking_result_1 = $total1;
        }

        if ($request->rangking_name_2 != NULL) {
            $result->ranking_point_2 = $point->point_team2;

            $total2 = $point->point_team2 + ($request->total_kill_2 * $point->point_per_kill); 
            $result->ranking_result_2 = $total2;
        }

        if ($request->rangking_name_3 != NULL) {
            $result->ranking_point_3 = $point->point_team3;

            $total3 = $point->point_team3 + ($request->total_kill_3 * $point->point_per_kill); 
            $result->ranking_result_3 = $total3;
        }

        if ($request->rangking_name_4 != NULL) {
            $result->ranking_point_4 = $point->point_team4;

            $total4 = $point->point_team4 + ($request->total_kill_4 * $point->point_per_kill); 
            $result->ranking_result_4 = $total4;
        }

        if ($request->rangking_name_5 != NULL) {
            $result->ranking_point_5 = $point->point_team5;

            $total5 = $point->point_team5 + ($request->total_kill_5 * $point->point_per_kill); 
            $result->ranking_result_5 = $total5;
        }

        if ($request->rangking_name_6 != NULL) {
            $result->ranking_point_6 = $point->point_team6;

            $total6 = $point->point_team6 + ($request->total_kill_6 * $point->point_per_kill); 
            $result->ranking_result_6 = $total6;
        }

        if ($request->rangking_name_7 != NULL) {
            $result->ranking_point_7 = $point->point_team7;

            $total7 = $point->point_team7 + ($request->total_kill_7 * $point->point_per_kill); 
            $result->ranking_result_7 = $total7;
        }

        if ($request->rangking_name_8 != NULL) {
            $result->ranking_point_8 = $point->point_team8;

            $total8 = $point->point_team8 + ($request->total_kill_8 * $point->point_per_kill); 
            $result->ranking_result_8 = $total8;
        }

        if ($request->rangking_name_9 != NULL) {
            $result->ranking_point_9 = $point->point_team9;

            $total9 = $point->point_team9 + ($request->total_kill_9 * $point->point_per_kill); 
            $result->ranking_result_9 = $total9;
        }

        if ($request->rangking_name_10 != NULL) {
            $result->ranking_point_10 = $point->point_team10;

            $total10 = $point->point_team10 + ($request->total_kill_10 * $point->point_per_kill); 
            $result->ranking_result_10 = $total10;
        }

        if ($request->rangking_name_11 != NULL) {
            $result->ranking_point_11 = $point->point_team11;

            $total11 = $point->point_team11 + ($request->total_kill_11 * $point->point_per_kill); 
            $result->ranking_result_11 = $total11;
        }

        if ($request->rangking_name_12 != NULL) {
            $result->ranking_point_12 = $point->point_team12;

            $total12 = $point->point_team12 + ($request->total_kill_12 * $point->point_per_kill); 
            $result->ranking_result_12 = $total12;
        }

        if ($request->rangking_name_13 != NULL) {
            $result->ranking_point_13 = $point->point_team13;

            $total13 = $point->point_team13 + ($request->total_kill_13 * $point->point_per_kill); 
            $result->ranking_result_13 = $total13;
        }

        if ($request->rangking_name_14 != NULL) {
            $result->ranking_point_14 = $point->point_team14;

            $total14 = $point->point_team14 + ($request->total_kill_14 * $point->point_per_kill); 
            $result->ranking_result_14 = $total14;
        }

        if ($request->rangking_name_15 != NULL) {
            $result->ranking_point_15 = $point->point_team15;

            $total15 = $point->point_team15 + ($request->total_kill_15 * $point->point_per_kill); 
            $result->ranking_result_15 = $total15;
        }

        if ($request->rangking_name_16 != NULL) {
            $result->ranking_point_16 = $point->point_team16;

            $total16 = $point->point_team16 + ($request->total_kill_16 * $point->point_per_kill); 
            $result->ranking_result_16 = $total16;
        }

        if ($request->rangking_name_17 != NULL) {
            $result->ranking_point_17 = $point->point_team17;

            $total17 = $point->point_team17 + ($request->total_kill_17 * $point->point_per_kill); 
            $result->ranking_result_17 = $total17;
        }

        if ($request->rangking_name_18 != NULL) {
            $result->ranking_point_18 = $point->point_team18;

            $total18 = $point->point_team18 + ($request->total_kill_18 * $point->point_per_kill); 
            $result->ranking_result_18 = $total18;
        }

        if ($request->rangking_name_19 != NULL) {
            $result->ranking_point_19 = $point->point_team19;

            $total19 = $point->point_team19 + ($request->total_kill_19 * $point->point_per_kill); 
            $result->ranking_result_19 = $total19;
        }
        
        if ($request->rangking_name_20 != NULL) {
            $result->ranking_point_20 = $point->point_team20;

            $total20 = $point->point_team20 + ($request->total_kill_20 * $point->point_per_kill); 
            $result->ranking_result_20 = $total20;
        }

        if ($request->rangking_name_21 != NULL) {
            $result->ranking_point_21 = $point->point_team21;

            $total21 = $point->point_team21 + ($request->total_kill_21 * $point->point_per_kill); 
            $result->ranking_result_21 = $total21;
        }

        if ($request->rangking_name_22 != NULL) {
            $result->ranking_point_22 = $point->point_team22;

            $total22 = $point->point_team22 + ($request->total_kill_22 * $point->point_per_kill); 
            $result->ranking_result_22 = $total22;
        }

        if ($request->rangking_name_23 != NULL) {
            $result->ranking_point_23 = $point->point_team23;

            $total23 = $point->point_team23 + ($request->total_kill_23 * $point->point_per_kill); 
            $result->ranking_result_23 = $total23;
        }

        if ($request->rangking_name_24 != NULL) {
            $result->ranking_point_24 = $point->point_team24;

            $total24 = $point->point_team24 + ($request->total_kill_24 * $point->point_per_kill); 
            $result->ranking_result_24 = $total24;
        }

        if ($request->rangking_name_25 != NULL) {
            $result->ranking_point_25 = $point->point_team25;

            $total25 = $point->point_team25 + ($request->total_kill_25 * $point->point_per_kill); 
            $result->ranking_result_25 = $total25;
        }
        
        $result->save();

        $total_team = Tournament::where('id', $id)->first();
        
        for ($i = 1; $i <= $total_team->total_team; $i++) {
            $namateam = '$request->rangking_name_'.$i;
            $rank = $i;
            $kills = '$request->total_kill_'.$i; 
            $totalscore = '$total'.$i;

            eval("\$totalscore = \"$totalscore\";");
            eval("\$namateam = \"$namateam\";");
            eval("\$rank = \"$rank\";");
            eval("\$kills = \"$kills\";");
            
            $score = new Score;
            $score->tournament_id = $id;
            $score->match = $request->match;
            $score->team_name = $namateam;
            $score->rank = $rank;
            $score->kills = $kills;
            $score->score = $totalscore;
            $score->save();
        }

        for ($i = 1; $i <= $total_team->total_team; $i++) {
            $namateam = '$request->rangking_name_'.$i;
            $kills = '$request->total_kill_'.$i; 
            $totalscore = '$total'.$i;

            eval("\$totalscore = \"$totalscore\";");
            eval("\$namateam = \"$namateam\";");
            eval("\$kills = \"$kills\";");

            $final = DB::table('finals')->where('tournament_id', $id)->where('team_name', $namateam)->get();
            if ($final->isEmpty()) {
                $data = DB::table('finals')->insert(
                    [
                        'tournament_id' => $id,
                        'team_name' => $namateam,
                        'kills' => $kills,
                        'score' => $totalscore,
                    ]
                );
            } else {
                $finalkill = $final[0]->kills + $kills;
                $finalscore = $final[0]->score + $totalscore;
                $data = DB::table('finals')->where('team_name', $namateam)->update(
                    [
                        'kills' => $finalkill,
                        'score' => $finalscore,
                    ]
                );
            }
        }

        return back();
    }
}
