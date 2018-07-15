console.log("connection");

$("#survey-button").on("click", function (event) {
    event.preventDefault();
    console.log("clicked")

    var movie = $("#q1.form-control").val();
    var music = $("#q2.form-control").val();
    var sport = $("#q3.form-control").val();
    var food = $("#q4.form-control").val();
    var activity = $("#q5.form-control").val();
    var id = $("#user_id").text();
    console.log(id);

    var survey = {
        movie: movie,
        music: music,
        sport: sport,
        food: food,
        activity: activity,
        UserId: id
    };

    console.log(survey);
    // var localSurvey = survey

    // localSurvey.setItem('localSurvey', JSON.stringify(localSurvey));

    // console.log(localSurvey)


    console.log(survey);
    // $.ajax({
    //     type: "POST",
    //     url: "api/addSurvey",
    //     data: survey,
    //     success: function (results) {
    //         console.log("good call");
    //         localStorage.setItem('user_id',);
    //     }
    // });

    $.ajax({
        type: "POST",
        url: "/api/addSurvey",
        data: survey,
        success: function (data) {
            console.log("---------------MESSAGE-----------");
            console.log(data);
            window.location.href = ("/wall/" + data.UserId);
        }
    });
})