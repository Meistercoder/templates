$(window).scroll ( function() {
    if ($(document).scrollTop() > 50) {
        document.getElementById('rechteck').style.height = '50px';
        document.getElementById('collapsibleNavbar').style.marginTop = '-58px'; //For eg
/* document.getElementById ist eine JavaScript-Funktion. Überall, wo das $-Zeichen
davor steht, wird JQuery verwendet. Es macht genau das Selbe, ist nur nicht so
verbose. Einfach kürzere Syntax, sonst kein Unterschied. */
    }
}

);

/* Funktion, um Links klickbar zu machen auf großen Bildschirm, jedoch nicht auf kleinen */

$(document).ready(function() {
  $("#versteckt").hide();

});

$(window).resize(function(){

});


var counter = 0;

$(function() { /*Kurzform für document - ready */
   $("a").click(function() {
      // remove active classes from all links
      $("a").removeClass("active");
      // add class to the one we clicked
      $(this).addClass("active"); //Der angeklickte Link wird auf aktiv gesetzt
      $("a").hide(); //Alle rechtlichen Links werden versteckt
      $(this).show();

      $(this).next("ul").children().children("a").show(); //Von dem Link aus werden in der ul die Kinder (li-element) und davon die Kinder (Links) ausgewählt

      $(this).next("ul").css("display", "block"); //Von dem Link aus wird das nächste ul angezeigt (Ist das gewünschte dropdown)

      $("#versteckt").show(); //Das Kreuz verstcken

   });
});

// Den Pfeil nach rechts, also eine Ebene weiter, verstecken
function aktivMachen() {
  $(".pfeil").hide();
  console.log("es geht");
}

//Das Kreuz, mit dem man eine Ebene zurück geht, verstecken
function schrittZuruck() {
  $("a").show(); //Alle Links wieder angezeigt
  $("#versteckt").hide(); //Kreuz wird versteckt
  $(".pfeil").show(); //Die Pfeile werden wieder angezeigt
}

//Das Logo verschwindet beim zweiten Mal beim klicken des Navigationsmenüs
function logoVerschwinde() {
 if (counter % 2 == 0) {
  $("#logo").hide();
  $(".navbar-collapse").css("padding-top", "40px");
  $(".navbar-toggler").attr("src", "close.png");
 }
 else {
  $("#logo").show();
  $(".navbar-toggler").attr("src", "hamburger-menu-icon.jpg");	}
  counter++;
}
