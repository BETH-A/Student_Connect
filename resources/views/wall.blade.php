<link rel="shortcut icon" type="image/png" href="/img/connect.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href={{asset('/css/wall.css')}}  />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css' />

<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <span class="navbar-brand mb-0 h1">Student Wall</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                <!--<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">
                    Let's do something!
                </a>

                Let's do something Modal
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Hit the books or hit the town?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <button type="Lg-button" class="btn btn-primary" id="studyButton" data-dismiss="modal">Study</button>
                                <button type="Lg-button" class="btn btn-primary" id="hangoutButton">Hangout</button>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div> -->
            </li>
        </ul>
    </div>
    <div class="weather" style="color:white">
    </div>
    <div class="icon" style="padding-right: 35px"><img class="icon" src="" alt="Weather icon"></div>
    <a class="navbar-brand ml-auto" href="#" >{{Auth::user()->name}}</a>
    <a class="navbar-brand" href="/" role="button" id="logoutButton">LogOut </a>
</nav>


<div class="container" data-target=".col-8">

    <div class="container">
        <div class="col-8">
            <div class="card flex-row flex-wrap" id="wallProfile">
                <div class="card-header border-0">
                    <img class="profilePic" width="140" alt="Image" src="/img/male1.jpg">
                </div>
                <div class="card-block px-3">
                    <h3 class="card-title" id="userName">Tom </h3>
                    <hr>
                    <h5 class="card-text" id="school">Student at UCF</h5>
                    <h5 class="card-text" id="fieldOfStudy">Computer Science</h5>
                    <h5 class="card-text" id="postalCode">32825</h5>

                </div>
            </div>
            <div class="card flex-row flex-wrap" id="wallProfile">
                <div class="card-header border-0">
                    <img class="profilePic" width="140" alt="Image" src="/img/female1.jpg">
                </div>
                <div class="card-block px-3">
                    <h4 class="card-title" id="userName">Julie </h4>
                    <hr>
                    <h5 class="card-text" id="school">Student at Seminole State</h5>
                    <h5 class="card-text" id="fieldOfStudy">Computer Science</h5>
                    <h5 class="card-text" id="postalCode">32773</h5>

                </div>
            </div>
            <div class="card flex-row flex-wrap" id="wallProfile">
                <div class="card-header border-0">
                    <img class="profilePic" width="140" alt="Image" src="/img/person1.jpg">
                </div>
                <div class="card-block px-3">
                    <h3 class="card-title" id="userName">Jamie </h3>
                    <hr>
                    <h5 class="card-text" id="school">Student at UCF</h5>
                    <h5 class="card-text" id="fieldOfStudy">Computer Science</h5>
                    <h5 class="card-text" id="postalCode">32825</h5>

                </div>
            </div>
        </div>

        <div class="col-4">
            <div id="myProfile" class="card">
                <img class="myProfilePic" width="140" alt="Image" src="/img/avatar.png">
                <div class="card-body">
                    <h5 class="card-title">MyProfile: 
                    <a href="#" class="card-link">{{Auth::user()->name}} Edit</a></h5>
                    <hr>
                    <h6 class="card-title">Status: </h6>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted">About Me</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item" id="movie">Favorite Movie Genre: Science Fiction</li>
                        <li class="list-group-item list-group-item" id="music">Favorite Music Genre: Rock</li>
                        <li class="list-group-item list-group-item" id="sport">Favorite Sport Genre: Not a fan of sports</li>
                        <li class="list-group-item list-group-item" id="restaurant">Favorite Restaurant: Asian (Chinese/Thai/Indian/Sushi)</li>
                        <li class="list-group-item list-group-item" id="activity">What you prefer to do: Spend the day watching TV/playing video games</li>
                    </ul>
                    <br>
                    <a href="{{ url('/chat') }}" class="card-link">Message</a>
                    <a href="#" class="card-link">Update Status</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!-- connecting js file  -->
<script src="/js/wall.js"></script>
