@extends('partials.main')

	@section('content')
	<div class="panel panel-primary">
  <div class="panel-heading">Users!! Login here</div>
  <div class="panel-body">	
	<form role="form" method="POST" action="{{url('auth/login')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email">
	  </div>
	  <div class="form-group">
	    <label for="password">Password:</label>
	    <input type="password" class="form-control" name="password">
	  </div>
	  <div class="checkbox">
	    <label><input type="checkbox"> Remember me</label>
	  </div>
	  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</button>
		
	  	<a href="/auth/register" class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Register as new User</a>
	</form>

	</div>
	<div class="panel-footer"><a href="/auth/password/email" class="btn "><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Forgot Password!!</a>
	</div>
	</div>

	<br>
	
@include('partials.errors')

@endsection
