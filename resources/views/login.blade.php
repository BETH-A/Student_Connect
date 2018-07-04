<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Connect</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="stylesheet" href="/css/loginpage.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css' />

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

        <div class="content">
            <div class="title m-b-md">
                Student Connect
            </div>
            <div id="mainButton">
                <div class="btn-text" onclick="openForm()">Sign In</div>
                <div class="modal">
                    <div class="close-button" onclick="closeForm()">x</div>
                    <div class="form-title">Sign In</div>
                    <div class="input-group">
                        <input type="text" id="name" onblur="checkInput(this)" />
                        <label for="name">Email</label>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" onblur="checkInput(this)" />
                        <label for="password">Password</label>
                    </div>
                    <div class="form-button" onclick="closeForm()">Go</div>
                    <div class="codepen-by">StudentConnect 2018</div>
                </div>
            </div>

            <div id="createAccountButton">
                <div class="btn-text" href="create.handlebars">Create Account</div>
            </div>

        </div>
    </div>
    <footer class="codepen-by">StudentConnect 2018</footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/loginpage.js"></script>
</body>

</html>
