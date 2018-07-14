
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Making the appointment confirmation pop up appear after the time selection
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var timeSel = document.getElementById("timeSelect");
var confirmAppointmentDetails = document.getElementById("floatingApproval");

timeSel.onclick = function () {
    console.log(123);
    confirmAppointmentDetails.style.display = "block";
};
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

