@extends('ViewsOfMatches.master')
@section('content')

<div class="container">
  <div class= row>
  <div class="col-10">
    <table class="table table-bordered mt-5">
    <caption style="caption-side: top;text-align: center;">
    <h5>Table of the highest score points </h5></caption>
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Points</th>
          
        </tr>
      </thead>
      <tbody>
      @foreach ($sortedTeams as $team)
        <tr >
          <td>{{$team->team_name}}</td>
          <td>{{$team->points}}</td>     
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
 </div>
</div>    
@endsection