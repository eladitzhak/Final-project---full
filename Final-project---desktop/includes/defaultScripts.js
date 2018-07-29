/*++++++++++++++++++++++++++++++++++++++ Registration ++++++++++++++++++++++++++++++++++++++*/

/*++++++++++++++++++++++++++++++++++++++ Header menu Icon ++++++++++++++++++++++++++++++++++++++*/

var isHamburgerOpen=1;

function hamburger(){
    var mainObject=document.getElementsByTagName("main")[0];
    var navObject=document.getElementsByClassName("indexNav")[0];
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

var MenuIcon = document.getElementsByClassName("menuIcon")[0];
MenuIcon.onclick = hamburger;

/*++++++++++++++++++++++++++++++++++++++ Notifications pop-up ++++++++++++++++++++++++++++++++++++++*/

function show_or_hide_notifications() {
    var notes = document.getElementById("notifications");
    if (notes.style.display != "block")
        notes.style.display = "block";
    else
    {
        notes.style.display = "none";
        document.getElementById("numOfNotifications").style.display = "none";
    }
};



var meme=document.getElementsByClassName("menuIcon")[0];

meme.onclick = function () {
    hamburger();
};

