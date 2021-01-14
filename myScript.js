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
var stickybar = document.getElementById("stickybar");


// Get the offset position of the navbar
var sticky = stickybar.offsetTop;


// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    stickybar.classList.add("sticky")
  } else {
    stickybar.classList.remove("sticky");
  }
}