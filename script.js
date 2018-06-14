// JavaScript source code

var navIsOpen = false;

function openNav() {
    if (navIsOpen) {
        document.getElementById("mySidenav").style.width = "0";
        navIsOpen = false;
    }
    else {
        document.getElementById("mySidenav").style.width = "250px";
        navIsOpen = true;
    }
}

