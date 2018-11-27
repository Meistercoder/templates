$(window).scroll ( function() {
  rechteckNavbarVerkleinern();
  scrollspyVerstecken();
});

/* Funktion, um Links klickbar zu machen auf großen Bildschirm, jedoch nicht auf kleinen */

$( document ).ready(function() {
    navlinksAnpassen();
    WelleAnpassen();
    kindAnpassen();
    akkordionIconsAnpassen();
    scrollspyPosition();
    headerbilderAnpassen();
});

$(window).resize(function(){
  navlinksAnpassen();
  WelleAnpassen();
  kindAnpassen();
});

function rechteckNavbarVerkleinern () {
  if ($(document).scrollTop() > 50) {
      document.getElementById('rechteck').style.height = '50px';
      document.getElementById('collapsibleNavbar').style.marginTop = '-58px'; //For eg
/* document.getElementById ist eine JavaScript-Funktion. Überall, wo das $-Zeichen
davor steht, wird JQuery verwendet. Es macht genau das Selbe, ist nur nicht so
verbose. Einfach kürzere Syntax, sonst kein Unterschied. */
  }
}

function headerbilderAnpassen () { //Bei Headerbildern die Größe anpassen
  var height = window.innerHeight * 0.3;
  console.log(height);
  if (height > 300) {
    $('.headerbild').css('height', height); //Falls mehr als ein Headerbild auf der Seite ist
    $('#headerbild').css('height', height);
  } else {
    $('.headerbild').css('height', 300);
    $('#headerbild').css('height', 300);
  }
  $('.headerbild').css('width', '100%');
  $('#headerbild').css('width', '100%');
}

function scrollspyVerstecken () { //Der Scrollspy ist 160 px lang, deswegen wird am unteren Teil des Scrollspys wenn er den Footer berührt dieser versteckt.
  if ( $( "#myScrollspy" ).length ) { //Check whether scrollspy exists

   var hFooter = $('#footer').offset().top - 160;
   var hScrollspy = $('#myScrollspy').offset().top;

  if (hScrollspy > hFooter){
     $('#myScrollspy > ul').css('display', 'none');
   } else {
     $('#myScrollspy > ul').css('display', 'block');
   }
 }
}


function scrollspyPosition () { //Den Scrollspy an die passende Position setzen beim draufklicken, also bisschen tiefer als sonst
  var offset = 60;

  $('#myScrollspy li a').click(function(event) {
      event.preventDefault();
      $($(this).attr('href'))[0].scrollIntoView();
      scrollBy(0, -offset);
  });
}


function WelleAnpassen () { //Welle für große und kleine Bildschirme anpassen

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

  function akkordionIconsAnpassen () { //Pfeil nach oben und unten ergänzen
  $( ".card-header" ).click(function() { //Der Pfeil ändert sich beim draufklicken
    if ($(this).children("a").hasClass("collapsed")) {
      $(".card-header").children("a").children("div").children(".col-2").children("img").attr("src", " https://aufbau-website.de/craft/web/bilder/header-bilder/chance-ev-arrow-down.png ");
      $(this).children("a").children("div").children(".col-2").children("img").attr("src", " https://aufbau-website.de/craft/web/bilder/header-bilder/chance-ev-arrow-up.png ");
    } else {
      $(this).children("a").children("div").children(".col-2").children("img").attr("src", " https://aufbau-website.de/craft/web/bilder/header-bilder/chance-ev-arrow-down.png ");
    }
});
}
