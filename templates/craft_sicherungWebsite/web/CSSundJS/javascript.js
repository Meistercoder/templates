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

$( document ).ready(function() {
    navlinksAnpassen();
    WelleAnpassen();
    kindAnpassen();
    akkordionIconsAnpassen();
});

$(window).resize(function(){
  navlinksAnpassen();
  WelleAnpassen();
  kindAnpassen();
});

function navlinksAnpassen () {

  if ($(window).innerWidth() < 976) {
    $(".nav-link").attr("data-toggle", "dropdown");
    $("#home").attr("data-toggle", "dropdown-disabled");
    $("#blog").attr("data-toggle", "dropdown-disabled");
    $("#kontakt").attr("data-toggle", "dropdown-disabled");
    $(".tab").attr("data-toggle", "pill");

    $("#logo").attr("width", "90");     $("#logo").attr("height", "70");

    $("#verschwinde").attr("class", " ");
    $("#verschwinde-lg-2").attr("class", " "); /*Anpassen der Boxen, das sie ab einer gewissen Größe verschwinden */
    $("#verschwinde-gros").attr("class", "col-3");

    $(".navbar").css("background-color", "#f8f5f2"); /* Setting background-color of navbar to grey */

    $("#footerHandy").css("display", "block")
    $("#footerDesktop").css("display", "none") /*Der mobile oder standard-footer wird angezeigt, je nach bildschirmgröße */

  }
  else {
        $(".nav-link").attr("data-toggle", "dropdown-disabled");
        $(".tab").attr("data-toggle", "pill");

        $(".navbar").css("background-color", "");
        $("#logo").attr("width", "160");     $("#logo").attr("height", "120");

        $("#verschwinde").attr("class", "col-lg-4 ");
        $("#verschwinde-lg-2").attr("class", "col-lg-2");
        $("#verschwinde-gros").attr("class", " ");

        $("#footerHandy").css("display", "none");
        $("#footerDesktop").css("display", "block"); /*Der mobile oder standard-footer wird angezeigt, je nach bildschirmgröße */
  }
}

function WelleAnpassen () {

  if ($(window).innerWidth() < 800 ) {

    $("#welle").css("width", "100%"); /*Die Welle größer machen auf kleinen Bildschirmen */
    $("#welle").css("margin-left", "-50%"); /*Die Welle größer machen auf kleinen Bildschirmen */

    $("#empfehlungenMobil").css("display", "block");
    $("#empfehlungenDesktop").css("display", "none"); /*Die mobilen oder standard-empfehlungen werden angezeigt, je nach bildschirmgröße */
  }
  else {
      $("#welle").css("width", "40%"); /*Die Welle größer machen auf kleinen Bildschirmen */
      $("#welle").css("margin-left", "0"); /*Die Welle größer machen auf kleinen Bildschirmen */

      $("#empfehlungenDesktop").css("display", "block");
      $("#empfehlungenMobil").css("display", "none"); /*Der mobile oder standard-footer wird angezeigt, je nach bildschirmgröße */
  }

  if ($(window).innerWidth() < 1000 ) { //Die Navbar anpassen

  $("#navbarDesktop").css("display", "none");
  $("#navbarHandy").css("display", "block");

  }
  else {
    $("#navbarDesktop").css("display", "block");
    $("#navbarHandy").css("display", "none");
  }
}


function kindAnpassen () { //Von der Spendenbox

  if ($(window).innerWidth() <= 752 ) {
    $("#kind").css("position", "relative"); /*Position des Kindes absolut setzen */
    $("#kind").css("max-height", "200px"); /*Position des Kindes absolut setzen */
    $("#kind").css("padding-bottom", "15px"); /*Position des Kindes absolut setzen */

  }
  else {
    $("#kind").css("position", "absolute");
    $("#kind").css("max-height", "100%"); /*Position des Kindes absolut setzen */
    $("#kind").css("padding-bottom", "0"); /*Position des Kindes absolut setzen */
}
}

  function akkordionIconsAnpassen () {
  $( ".card-header" ).click(function() { //Der Pfeil ändert sich beim draufklicken
    if ($(this).children("a").hasClass("collapsed")) {
      $(this).children("a").children("div").children(".col-2").children("img").attr("src", " https://aufbau-website.de/craft/web/bilder/header-bilder/chance-ev-arrow-up.png ");
    } else {
      $(this).children("a").children("div").children(".col-2").children("img").attr("src", " https://aufbau-website.de/craft/web/bilder/header-bilder/chance-ev-arrow-down.png ");
    }
});
}
