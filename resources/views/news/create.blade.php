@extends('layouts.master')

@section('content')
	
	<h2>Add News</h2>

 	<form method="POST" action="/news">

 		{{ csrf_field() }}
  
	  	<div class="form-group">
	    	<label for="title">Title</label>
	    	<input type="text" class="form-control" id="title" name="title"><br>

	    	<label for="content">Content</label>
	    	<textarea class="form-control" id="content" name="content"></textarea>

	    	

	    	{{-- <label for="team_id">Team</label> --}}
	    	{{-- <select name="team_id" id="team_id" class="form-control input-sm">
	    		
	    		@foreach($teams as $team)
	    			<option value="{{ $team->id }}"> {{ $team->name }} </option>
	    		@endforeach

	    	</select><br> --}}

	    	@if (count($teams))

	            <div class="form-group">
	                <label for="teams">Teams:</label> <br>

	                @foreach ($teams as $team)
	                    <input type="checkbox" id="team" name="teams[]" value="{{ $team->id }}"> {{ $team->name }} <br>
	                @endforeach

	            </div>
        	@endif
	    	
	    	<button type="submit" class="btn btn-primary">Add News</button>

	  	</div>

	</form>
 	<br>

 	@foreach($errors->all() as $error)

 		<div class="alert alert-danger">
 			
 			<strong>{{ $error }}</strong>

 		</div>

 	@endforeach

	
@endsection