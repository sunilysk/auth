@extends('partials.main')

    @section('content')
    <form role="form" method="POST" action="{{url('admin/password/email')}}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-default">Send Password Reset Link</button>
    </form>
    </form>
<br>
    
@include('partials.errors')

@endsection