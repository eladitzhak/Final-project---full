/*++++++++++++++++++++++++++++++++++++++ Appointment ++++++++++++++++++++++++++++++++++++++*/

var fromApp = document.getElementById("formEditAppointment");
var SA = document.getElementById("selectAppointment");
var ES = document.getElementById("EditSuccessfully");
var isHamburgerOpen=1;

function changeToEditPage() {
    SA.style.display = "none";
    fromApp.style.display = "block";
}

function saveEditionChanges() {
    fromApp.style.display = "none";
    ES.style.display = "block";
}

function hamburger(){
    var mainObject=document.getElementById("appMain");
    var navObject=document.getElementById("appNav");
    console.log(mainObject.style.position);
    console.log(mainObject.style.width);

    if (isHamburgerOpen==1)
    {
        navObject.style.width="0%";
        mainObject.style.width="100%";
        isHamburgerOpen=0;
    }else {
        navObject.style.width="20%";
        mainObject.style.width="80%";
        isHamburgerOpen=1;
    }
}

$(function() {
    $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
    });
});


document.getElementById("chooseAppointmentToEdit").onclick = function () {
    changeToEditPage();
};

document.getElementById("saveEditChanges").onclick = function () {
    saveEditionChanges();
};


