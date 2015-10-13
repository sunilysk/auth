<!doctype html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <title>Email reset for Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
<form role="form" method="POST" action="{{url('other/password/email')}}">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
    <button type="submit" class="btn btn-default">Send Password Reset Link</button>
</form>
</form>
    </div>
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