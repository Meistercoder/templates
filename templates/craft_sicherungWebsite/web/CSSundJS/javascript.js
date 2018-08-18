$(window).scroll ( function() {
    if ($(document).scrollTop() > 50) {
        document.getElementById('rechteck').style.height = '50px';
        document.getElementById('collapsibleNavbar').style.marginTop = '-55px'; //For eg
/* document.getElementById ist eine JavaScript-Funktion. Überall, wo das $-Zeichen
davor steht, wird JQuery verwendet. Es macht genau das Selbe, ist nur nicht so
verbose. Einfach kürzere Syntax, sonst kein Unterschied. */
    }
}

);

/* Funktion, um Links klickbar zu machen auf großen Bildschirm, jedoch nicht auf kleinen */

$( document ).ready(function() {
    navlinksAnpassen();
});

$(window).resize(function(){
  navlinksAnpassen();
});

function navlinksAnpassen () {

  if ($(window).innerWidth() < 976) {
    $(".nav-link").attr("data-toggle", "dropdown");
    $("#home").attr("data-toggle", "dropdown-disabled");
    $("#blog").attr("data-toggle", "dropdown-disabled");
    $("#kontakt").attr("data-toggle", "dropdown-disabled");
    $("#logo").attr("width", "90");     $("#logo").attr("height", "70");

    $("#verschwinde").attr("class", " ");
    $("#verschwinde-lg-2").attr("class", " ");
    $("#verschwinde-gros").attr("class", "col-3");

    $(".navbar").css("background-color", "#f8f5f2"); /* Setting background-color of navbar to grey */
  }
  else {
        $(".nav-link").attr("data-toggle", "dropdown-disabled");
        $(".navbar").css("background-color", "");
        $("#logo").attr("width", "160");     $("#logo").attr("height", "120");

        $("#verschwinde").attr("class", "col-lg-4 ");
        $("#verschwinde-lg-2").attr("class", "col-lg-2");
        $("#verschwinde-gros").attr("class", " ");


  }
}
