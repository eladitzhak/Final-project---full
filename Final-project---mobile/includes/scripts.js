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


