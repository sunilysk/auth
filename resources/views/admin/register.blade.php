@extends('partials.main')

    @section('content')

    <div class="panel panel-default">
  <div class="panel-heading">Admins!! register here</div>
  <div class="panel-body">
		<form method="POST" action="{{url('admin/register')}}" >
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
    </div>
    <br>
    
@include('partials.errors')

@endsection