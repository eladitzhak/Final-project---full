
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Making the appointment confirmation pop up appear after the time selection
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var timeSel = document.getElementById("save-event");
var confirmAppointmentDetails = document.getElementById("floatingApproval");
var NotGood = document.getElementById("notGood");

timeSel.onclick = function () {
    confirmAppointmentDetails.style.display = "block";
    confirmAppointmentDetails.style.zIndex = "10000";
};

NotGood.onclick = function () {
    confirmAppointmentDetails.style.display = "none";
};

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
