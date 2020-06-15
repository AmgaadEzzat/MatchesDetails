@extends('ViewsOfMatches.master')
@section('content')
<div class="container m-5  ">
  
    <form method="POST"  action="insertTeams" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
            <label for="teamname">Team Name select</label>
            <select  class="form-control" id="teamname" name="teamName">
            @foreach ($TeamNames as $TeamName)
            <option name="teamName">{{$TeamName->team_name}}</option>
            @endforeach
            </select>
       </div>
        <div class="form-group ">
            <label for="status" class=" col-form-label">Select Status</label>
            
                <select class="form-control" id="status" name="status">
                <option name="status" value="n">none</option>        <!-- Not played yet -->
                <option name="status" value="w">won</option>
                <option name="status" value="e">equal</option>
                <option name="status" value="l">lost</option>
                </select>
            
        </div>
        <div class="form-group row">
           <div class="col-sm-8 offset-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
    </form>
    </div>
    
@endsection
