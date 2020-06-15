<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Team;
use App\Matchdetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class TeamController extends Controller
{
    
  public function getTeamName(){
    $TeamNames= DB::table('teams')
       ->select('teams.*')->get();
       
       return view('ViewsOfMatches.teamsPage', compact('TeamNames'));
  }

  public function insertTeam ( Request $request){
       $match = new Match();
       $match->status = $request->status;
       $teamName=$request->teamName ;
       $teamid=DB::table('teams')->where('team_name','=',$teamName)->get();
       
      
       foreach ($teamid as $id )
       $match->teamId = $id->teamId;
    
       
       if (($request->status) == "n"  )
       {        
            $match->points = 0;
            $match->save();     
       }

       elseif (($request->status) == "w"  )
       {
       
        $lastTeamRow=DB::table('matches')->where('matches.teamId' , '=' , $id->teamId)
         ->latest('matches.points')->first();
         $lastTeamRow->points += 3;
         $match->points = $lastTeamRow->points;
         
         $match->save();
         
        }
       elseif(($request->status) == "e" )
       {
        
        $lastTeamRow=DB::table('matches')->where('matches.teamId' , '=' , $id->teamId)
        ->latest('matches.points')->first();
        $lastTeamRow->points += 1;      
        $match->points = $lastTeamRow->points;  
        $match->save();
        
       }
       else
       {
        
        $lastTeamRow=DB::table('matches')->where('matches.teamId' , '=' , $id->teamId)
        ->latest('matches.points')->first();
        $lastTeamRow->points += 0;
        $match->points = $lastTeamRow->points;
        
        $match->save();
         }
          
            $sortedTeams = DB::table('matches')
            ->leftjoin('teams' , 'matches.teamId' , '=' , 'teams.teamId')
            ->select('matches.teamId' , 'teams.*',DB::raw('MAX(points) as points'))
            ->groupBy('matches.teamId')
            ->orderBy('points' , 'desc')
            ->get(); 
             
            return view('ViewsOfMatches.sortedOfTeamsPage', compact ('sortedTeams'));
      
    }


    public function getMatchDetails(){
      $matchTeamNames= Team::get();
        
         return view('ViewsOfMatches.matchdetails', compact('matchTeamNames'));
    }

    function insertDetailsOfMatches( Request $request){
        $matchDetails = new Matchdetails ();
        
        $matchDetails->home_team = $request->hometeam ;
        $matchDetails->away_team = $request->awayteam;
        $matchDetails->date = $request->date ;
        $matchDetails->score_home_team = $request->score_home_team;
        $matchDetails->score_away_team = $request->score_away_team;
        
        $matchDetails->save();

        $allmatchDetauls= Matchdetails::get();
        return view('ViewsOfMatches.tableofAllMatches' , compact ('allmatchDetauls'));
    }

    

}
