<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/img/connect.png" />

    <title>Student Connect</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="stylesheet" href="/css/loginpage.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,400,500,300,600' rel='stylesheet' type='text/css' />

</head>

<body>


    @section('content')

<div class="col-sm-8 user-main">
    @foreach ($users as $user)
        @include('users.userId')
    @endforeach

</div>

@endsection

</body>

</html>