/*++++++++++++++++++++++++++++++++++++++ Appointment changes ++++++++++++++++++++++++++++++++++++++*/

var SaveChange = document.getElementsByClassName("savingChange")[0];
var SelectApp = document.getElementsByClassName("selectAppointment")[0];
var ChangeSuccess = document.getElementsByClassName("changedSuccessfully")[0];
var submit=document.getElementById("submit");
var nameEvent=document.getElementById("nameEvent");

function changeToEditPage() {
    SelectApp.style.display = "none";
    SaveChange.style.display = "block";
}

function saveEditionChanges() {
    SaveChange.style.display = "none";
    ChangeSuccess.style.display = "block";
}

var CATE = document.getElementsByClassName("chooseAppointmentToEdit")[0];
CATE.onclick = function() {
    changeToEditPage();
};

// var SEC = document.getElementsByClassName("saveEditChanges")[0];
// SEC.onclick =  function() {
//     saveEditionChanges();
// };

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

$(function() {
    $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
    });
});
/*+++++++++++++++++++++++++++parse json for appointment+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

$(document).ready(function(){


    $.getJSON("includes/results.json",function(data){


        $.each(data.appointmentsEvents,function (i,obj){
            $('#selectToDelete').append (("<option>")+(this.id) +"." +("|") +(this.title) +("|") + (this.start) + ("|")+("</option>"));
        });

    })
});
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

