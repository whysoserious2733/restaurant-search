var feedbackname = document.getElementById("feedbackname");
var feedbackemail = document.getElementById("feedbackemail");
var feedbackcomment = document.getElementById("feedbackcomment");

function submit(){

    var mname =feedbackname.value;
    var memail =feedbackemail.value;
    var mcomment =feedbackcomment.value;
    window.alert("feedback has been submitted, thank you");
    firebase.database().ref(mname).set({
        usernmae : mname,
        email : memail,
        comment : mcomment
    });
}

