function myFunction() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
    }
}

function color() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    //var menu = document.body.getElementsByClassName.topnav;
    //menu.classList.toggle("dark-mode");
}