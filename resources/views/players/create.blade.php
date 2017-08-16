@extends('layouts.master')

@section('content')
	
	<h2>Add new Player</h2>

 	<form method="POST" action="/players">

 		{{ csrf_field() }}
  
	  	<div class="form-group">
	    	<label for="first_name">First name</label>
	    	<input type="text" class="form-control" id="first_name" name="first_name"><br>

	    	<label for="last_name">Last name</label>
	    	<input type="text" class="form-control" id="last_name" name="last_name"><br>

	    	<label for="email">Email</label>
	    	<input type="text" class="form-control" id="email" name="email"><br>

	    	<label for="team_id">Team</label>
	    	<select name="team_id" id="team_id" class="form-control input-sm">
	    		
	    		@foreach($teams as $team)
	    			<option value="{{ $team->id }}"> {{ $team->name }} </option>
	    		@endforeach

	    	</select><br>
	    	
	    	<button type="submit" class="btn btn-primary">Add a player</button>

	  	</div>

	</form>
 	<br>

 	@foreach($errors->all() as $error)

 		<div class="alert alert-danger">
 			
 			<strong>{{ $error }}</strong>

 		</div>

 	@endforeach

	
@endsection