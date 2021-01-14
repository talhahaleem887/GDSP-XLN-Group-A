
function showHide(shown, hidden){
    document.getElementById(hidden).style.display='block';
    document.getElementById(shown).style.display='none';
    return false;
}

function show(hidden){
    document.getElementById(hidden).style.display='block';
    return false;
}

window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}