


//Slideshow for Game Projects
var slideIndex = 0;
carousel();

function carousel()
{
  var i;
  var x = document.getElementsByClassName("forkSlides");
  for (i = 0; i < x.length; i++)
  {
    x[i].style.display = "none";
  }
  
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  
  x[slideIndex-1].style.display = "block";
  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
//var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
} 

/*
function openSlideMenu()
{
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
}

function closeSlideMenu()
{
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
}
*/
