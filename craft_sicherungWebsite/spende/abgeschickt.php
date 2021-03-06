<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chance International</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link href="https://aufbau-website.de/craft/web/CSSundJS/stylevorgaben.css" rel="stylesheet" />
  <link href="https://aufbau-website.de/craft/web/CSSundJS/navbarCSS.css" rel="stylesheet" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://aufbau-website.de/craft/web/CSSundJS/javascript.js"> </script>

</head>

<body>

  <?php include 'navbar.html';?>


  <div class="container-fluid text-center" id="ersterContainer" style="padding-top: 120px; position: relative;">

    <img class="img-fluid" src="{{ craft.assets.filename('welle.png').one().getUrl() }}" style="position: absolute; left:0; width: 40%;  z-index: -999;">

    <div class="container achterspaltenlayout" style="padding-top:0px;">

      <div style="padding-bottom:50px; ">
        <h1 style="padding-bottom: 30px;"> Geben Sie Menschen eine Chance  </h1>
      </div>
    </div>
  </div>

  <?php

  // use wordwrap() if lines are longer than 70 characters
  $msg =  "Hallo Jens, ein neuer Dauerauftrag wurde eingerichtet: 
            \nKontoinhaber: "  . $_SESSION["inhaber"]
          . "\nStraße, Hausnummer: " . $_SESSION["adresse"]
          . "\nPLZ, Ort: "  . $_SESSION["plz"]
          .  "\nE-Mail: " . $_SESSION["email"]
          .  "\nName der Bank: " . $_SESSION["bank"]
          . "\nBetrag: " . $_SESSION["betrag"] . " EUR"
          . "\nVerwendungszweck: "  . $_SESSION["zweck"]
          . "\nIBAN: " . $_SESSION["iban"]
          . "\nBIC: "  . $_SESSION["bic"];

  // send email
  mail("fe.fessler@gmx.de","My subject",$msg);
  ?>


  <div class="container-fluid">
    <div class="container zwoelferspaltenlayout" style="background-color: white; padding-bottom: 6rem;">
      <p id="anleser"> Vielen Dank für Ihre Spende</p>
    </div>
  </div>

  </body>
  </html>
