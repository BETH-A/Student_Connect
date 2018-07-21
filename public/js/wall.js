console.log("connection - wall");

//  weather api
var weatherApi = "http://api.openweathermap.org/data/2.5/weather?zip=32825,us&units=imperial&APPID=dd4bcd5a220ae9163c6f6be889b80815";

$.ajax({
  url: weatherApi,
  method: "GET"
}).then(function (response) {

  console.log(response);
  console.log(response.results);

  var temp = response.main.temp;
  var icon = response.weather[0].icon;
  var city = response.name;
  var iconUrl = "http://openweathermap.org/img/w/" + icon + ".png";  
  

  $(".weather").append(city + " " + temp + " &deg;F " + " ")
  $(".icon").attr('src', iconUrl);
  console.log(response.city);


});

