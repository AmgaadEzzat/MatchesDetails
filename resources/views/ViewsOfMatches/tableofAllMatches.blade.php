@extends('ViewsOfMatches.master')
@section('content')
<div class="container">
  <div class= row>
  <div class="col-10">
    <table class="table table-bordered mt-5">
    <caption style="caption-side: top;text-align: center;">
    <h5>Table of the all matches </h5></caption>
      <thead>
        <tr>
          <th scope="col">Home_Team_Name</th>
          <th scope="col">Home_Away_Name</th>
          <th scope="col">Date</th>
          <th scope="col">Score_Home_Team</th>
          <th scope="col">Score_Away_Team</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($allmatchDetauls as $matchDetails)
        <tr>
          <td>{{$matchDetails->home_team}}</td>
          <td>{{$matchDetails->away_team}}</td> 
          <td>{{$matchDetails->date}}</td>
          <td>{{$matchDetails->score_home_team}}</td>
          <td>{{$matchDetails->score_away_team}}</td>    
        </tr>
        @endforeach
      </tbody>
 </table>
 </div>
 </div>
 </div>
@endsection