<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
                padding-top: 30px;
                margin-top: 20px;

            }

            .title {
                font-weight: 100;
                font-family: 'Lato';
                font-size: 96px;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <div class="title">Laravel's MultiAuth System</div>
            </div>
        </div>
            <br><br>
        <div class="container">
            <div class="text-center">
                <a class="btn btn-primary btn-lg" href="/auth/login">I am a USer</a>
            </div>
        </div>

        <br>
         <div class="container">
            <div class="text-center">
                <a class="btn btn-danger btn-lg" href="/admin/login">I am an ADmin</a>
            </div>
        </div>
        <br>
         <div class="container">
            <div class="text-center">
                <a class="btn btn-info btn-lg" href="/other/login">I am OTher</a>
            </div>
        </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
