<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
	
</head>
<body>
		<div class="container">
		<form method="POST" action="{{url('auth/register')}}" >
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div>
        Password
        <input type="password" name="password" class="form-control">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation" class="form-control">
    </div>
	<br>
    <div>
        <button type="submit" class="form-control btn btn-warning">Register</button>
    </div>
</form>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>