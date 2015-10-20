@extends('partials.main')

    @section('content')
    <div class="panel panel-primary">
  <div class="panel-heading">Users!! Register here</div>
  <div class="panel-body">
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
        <button type="submit" class="form-control btn btn-info">Register</button>
    </div>
</form>
    </div></div>
    <br>
    
@include('partials.errors')

@endsection
