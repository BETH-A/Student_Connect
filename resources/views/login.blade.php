<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/img/connect.png" />

    <title>Student Connect</title>

    <!-- Styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
  crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css" />
    <!-- <link rel="stylesheet" href="/css/loginpage.css" /> -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,400,500,300,600' rel='stylesheet' type='text/css' />

<!-- </head> -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <div class="navbar-brand">Student Connect</div>
    <a class="navbar-brand" style="padding-left: 77%"  href="/session" role="button" id="loginButton">Login </a>
    <a class="navbar-brand" href="/register" role="button" id="registerButton">Register </a>
</nav>

<div class="form-group">
            <label for="email address">Email Address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" name="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <small id="passwordHelp" class="form-text text-muted">Min of 6 characters</small>
        </div>

    <div>
    <footer class="codepen-by">StudentConnect 2018</footer>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/js/loginpage.js"></script>


</html>
