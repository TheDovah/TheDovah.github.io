


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
