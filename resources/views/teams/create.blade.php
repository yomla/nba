@extends('layouts.master')

@section('content')
	
	<h2>Create new Team</h2>

 	<form method="POST" action="/teams">

 		{{ csrf_field() }}
  
	  	<div class="form-group">
	    	<label for="name">Name</label>
	    	<input type="text" class="form-control" id="name" name="name"><br>

	    	<label for="email">Email</label>
	    	<input type="text" class="form-control" id="email" name="email"><br>

	    	<label for="adress">Adress</label>
	    	<input type="text" class="form-control" id="adress" name="adress"><br>

	    	<label for="city">City</label>
	    	<input type="text" class="form-control" id="city" name="city"><br>

	    	<button type="submit" class="btn btn-primary">Publish</button>

	  	</div>

	</form>
 	<br>

 	@foreach($errors->all() as $error)

 		<div class="alert alert-danger">
 			
 			<strong>{{ $error }}</strong>

 		</div>

 	@endforeach

	
@endsection