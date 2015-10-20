@extends('partials.main')

    @section('content')

    <form role="form" method="POST" action="{{url('admin/password/reset')}}">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

<br>
    
@include('partials.errors')

@endsection