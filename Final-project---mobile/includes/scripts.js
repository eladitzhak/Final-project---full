// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// New_Appointment_Time.html: making the appointment confirmation pop up appear after the time selection
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function HamburgerOpenClose() {
    var HamburgerMenu = document.getElementsByClassName("hamburger")[0];
        if(HamburgerMenu.style.display == "block")
            HamburgerMenu.style.display = "none";
        else
            HamburgerMenu.style.display = "block";
}

var HamburgerIcon = document.getElementsByClassName("menuIcon")[0];
HamburgerIcon.onclick = HamburgerOpenClose;

var assist = document.getElementsByTagName("body")[0];
assist.onclick = function () {
  var ham = document.getElementsByClassName("fc-row fc-week fc-widget-content fc-rigid");
    for (var i=6;i>0;i--)
        ham[i-1].setAttribute("style","height:45px");
}


