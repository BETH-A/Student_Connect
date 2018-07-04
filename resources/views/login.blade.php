<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Connect</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="stylesheet" href="/css/loginpage.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,400,500,300,600' rel='stylesheet' type='text/css' />

</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        @endif


    </div>
    <script             src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/loginpage.js"></script>
</body>

</html>
