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

  <?php include 'pruefen.php';?>

  <div class="container-fluid text-center" id="ersterContainer" style="padding-top: 120px; position: relative;">

    <img class="img-fluid" src="{{ craft.assets.filename('welle.png').one().getUrl() }}" style="position: absolute; left:0; width: 40%;  z-index: -999;">

    <div class="container achterspaltenlayout" style="padding-top:0px;">

      <div style="padding-bottom:50px; ">
        <h1 style="padding-bottom: 30px;"> Geben Sie Menschen eine Chance  </h1>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container zwoelferspaltenlayout" style="background-color: white; padding-bottom: 6rem;">
      <h2> Auftrag prüfen und absenden </h2>
      <p id="copy"> Ich/wir ermächtige(n) Chance e.V. Zahlungen von meinem/unserem Konto mittels Lastschrift einzuziehen. Zugleich weise(n) ich/
wir mein/unser Kreditinstitut an, die von Chance e.V. auf mein/unser Konto gezogenen Lastschriften einzulösen. </p>

  <div class="row">
    <div class="col-3" id="copy"> Kontoinhaber  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["inhaber"]; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> Straße, Hausnummer  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["adresse"]; ?>  </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> PLZ, Ort  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["plz"]; ?>  </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> E-Mail  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["email"]; ?>  </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> Name der Bank  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["bank"]; ?>  </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> Betrag  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["betrag"] . " EUR"; ?>  </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> Verwendungszweck  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["zweck"]; ?>  </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> IBAN  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["iban"]; ?>  </div>
  </div>
  <div class="row">
    <div class="col-3" id="copy"> BIC  </div>
    <div class="col-9" id="anleser">     <?php echo $_SESSION["bic"]; ?>  </div>
  </div>

  <button onclick="goBack()" class="btn btn-primary">Bearbeiten</button>
  <script> function goBack() {  window.history.back(); } </script>


  <input type="submit" class="btn btn-primary float-right" name="submit" value="Austrag ausdrucken und verschicken">

  <a href="https://aufbau-website.de/spende/abgeschickt" class="btn btn-primary" role="button">Auftrag online absenden</a>

    </div>
  </div>

  </body>
  </html>
