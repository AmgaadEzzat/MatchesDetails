@extends('ViewsOfMatches.master')
@section('content')

<div class="container m-5  ">
  
    <form method="POST"  action="insertMatchDetails" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
            <label for="hometeam"> Home Team Name </label>
            <select  class="form-control" id="hometeam" name="hometeam">
            @foreach ($matchTeamNames as $HomeTeamName)
            <option name="hometeam">{{$HomeTeamName->team_name}}</option>
            @endforeach
            </select>
       </div>
       <div class="form-group">
            <label for="awayteam"> Away Team Name </label>
            <select  class="form-control" id="awayteam" name="awayteam">
            @foreach ($matchTeamNames as $AwayTeamName)
            <option name="awayteam">{{$AwayTeamName->team_name}}</option>
            @endforeach
            </select>
       </div>

       <div class="form-group">
            <label for="date"> Date </label>
            <input type="date"  class="form-control" id="date" name="date">
       </div>

       <div class="form-group">
            <label for="scorehome"> Score_Home_Team </label>
            <input type="number"  class="form-control" id="scorehome" name="score_home_team">
       </div>

       <div class="form-group">
            <label for="scoreaway"> Score_Away_Team </label>
            <input type="number"  class="form-control" id="scoreaway" name="score_away_team">
       </div>

        <div class="form-group row">
           <div class="col-sm-8 offset-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
    </form>
    </div>
@endsection