$(window).scroll ( function() {
    if ($(document).scrollTop() > 50) {
        document.getElementById('rechteck').style.height = '50px';
        document.getElementById('collapsibleNavbar').style.marginTop = '-55px'; //For eg

    }
}

);

/* Funktion, um Links klickbar zu machen auf großen Bildschirm, jedoch nicht auf kleinen */

$( document ).ready(function() {
if ($(window).width() < 992) {
  $(".nav-link").attr("data-toggle", "dropdown");
}
else {
  // Get all nav-links inside the navbar
  var navlinks = document.getElementsByClassName("nav-link");

  // Loop through the navbars
  for (var i = 0; i < navlinks.length ; i++) {
    console.log("data toogle geändert");
    navlinks[i].outerHTML = navlinks[i].outerHTML.replace("data-toggle=\"dropdown\"","data-toggle=\"dropdown disabled\"");
  }
  $(".nav-link").attr("data-toggle", "dropdown disabled");
  console.log("data toogle geändert");
}
});
