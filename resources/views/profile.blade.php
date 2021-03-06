<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" media="screen" href="/css/create.css" />
<!-- <link rel="stylesheet" href="/css/createpage.scss" /> -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css' />
<link rel="shortcut icon" type="image/png" href="/img/connect.png" />

<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <div class="navbar-brand">Student Profile
    </div>
</nav>

<div class="container" style="background:white">
    <form method="POST" action="{{url('/api/profile')}}">
        {{csrf_field() }}

        <div class="form-group">
            <label for="username">Your Name</label>
            <input type="text" class="form-control" id="user_name" placeholder="Your Name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email address">Email Address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" name="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
            <label for="postalCode">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" placeholder="Postal Code" name="postal_code" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="Status" name="status">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1"> Field of Study </label>
            <select class="form-control" id="field_study" name="field_study" required>
                <option>Choose your field of Study</option>
                <option>Arts and Sciences</option>
                <option>Mathematics</option>
                <option>Computer Sciences</option>
                <option>Education</option>
                <option>Medical</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Picture</label>
            <input type="url" class="form-control" id="pic" placeholder="Picture URL" name="pic">
        </div>
        <a>
            <br>
            <button id="create-form" type="submit" class="btn btn-default btn-lg" value="Submit" name="Submit">Submit</button>
        </a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- <script src="/js/create.js"></script> -->
