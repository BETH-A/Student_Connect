<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
  crossorigin="anonymous">
<link rel="stylesheet" type="text/css" media="screen" href={{asset('css/survey.css')}} />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css' /> 
<link rel="shortcut icon" type="image/png" href="/img/connect.png" />

<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <div class="navbar-brand">Student Survey... tell us a little about yourself</div>
</nav>

<div class="container" style="background:white">

  <form method="POST" action="{{url('/api/survey')}}">
    {{csrf_field() }}

    <input type ="hidden" name = "id" value="{{$userId}}">
    
    <div class="form-group">
      <label for="exampleFormControlSelect1">What is your favorite genre of movie?</label>
      <select class="form-control" id="movie" name="movie">
        <option>Select one of the below...</option>
        <option>Action</option>
        <option>Comedy</option>
        <option>Drama</option>
        <option>Science Fiction</option>
        <option>Horror</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">What is your favorite genre of music?</label>
      <select class="form-control" id="music" name="music">
        <option>Select one of the below...</option>
        <option>Country</option>
        <option>Pop</option>
        <option>R&B/Hip-Hop</option>
        <option>Rock</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">What is your favorite type of sport?</label>
      <select class="form-control" id="sport" name="sport">
        <option>Select one of the below...</option>
        <option>Basketball</option>
        <option>Football</option>
        <option>Baseball</option>
        <option>Soccer</option>
        <option>Not a fan of sports</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">What is your favorite type of restaurant?</label>
      <select class="form-control" id="food" name="food">
        <option>Select one of the below...</option>
        <option>Asian (Chinese/Thai/Indian/Sushi)</option>
        <option>American</option>
        <option>Cajun</option>
        <option>Italian</option>
        <option>Mexican</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Which would you prefer to do?</label>
      <select class="form-control" id="activity" name="activity">
        <option>Select one of the below...</option>
        <option>Spend the day at the beach</option>
        <option>Spend the day hiking/rock climbing</option>
        <option>Spend the day indoors reading a good book</option>
        <option>Spend the day watching TV/playing video games</option>
        <option>Spend the day with friends/family</option>
      </select>
    </div>
    <a>
      <br>
      <br>
      <button id="survey-button" type="submit" class="btn btn-default btn-lg" value="Submit" name="Submit">
    </a>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- <script src="/js/survey.js"> -->
</script>