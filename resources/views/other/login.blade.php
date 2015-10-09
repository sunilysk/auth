<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
	
</head>
<body>
	<div class="container">
		
	<form role="form" method="POST" action="{{url('other/login')}}">
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
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>

	</div>
	<br>
	
	@if(count($errors) >0)
	
	<div class="container">
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>

		</div>

	</div>

	@endif

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>