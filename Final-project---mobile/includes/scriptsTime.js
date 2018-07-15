
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Making the appointment confirmation pop up appear after the time selection
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var timeSel = document.getElementById("timeSelect");
var confirmAppointmentDetails = document.getElementById("floatingApproval");
var NotGood = document.getElementById("notGood");

timeSel.onclick = function () {
    confirmAppointmentDetails.style.display = "block";
};

NotGood.onclick = function () {
    confirmAppointmentDetails.style.display = "none";
};

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

