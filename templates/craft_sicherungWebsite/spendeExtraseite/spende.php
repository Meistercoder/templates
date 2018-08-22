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

<div class="container" style="padding-bottom: 6rem;">

<h2>Regelmäßige Spende </h2>

<p id="copy"> Eine regelmäßige Spende können Sie durch das Ausfüllen des folgenden Formulars bequem online einrichten. Alternativ können
Sie das SEPA-Lastschriftmandat herunterladen und eigenständig ausfüllen oder aber Sie richten einen Dauerauftrag ein. </p>

<form method="post" action=" <?php echo htmlspecialchars(absenden); ?>">

  <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck3" name="einziehen" required>
      <label class="custom-control-label" for="customCheck3">Hiermit ermächtige(n) ich/wir Chance e.V. Zahlungen von meinem/unserem Konto mittels Lastschrift einzuziehen. Zugleich
weise(n) ich/wir mein/unser Kreditinstitut an, die von Chance e.V. auf mein/unser Konto gezogenen Lastschriften einzulösen.
Hier können Sie die Termine der Einzüge unserer SEPA-Lastschriften einsehen.</label>
<span class="error"> <?php echo $einziehenErr;?></span>
</div> <br>

  Intervall: <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="monatlich">monatlich
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="quartalsweise">quartalsweise
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="halbjährlich">halbjährlich
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="jährlich">jährlich
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

    <div class="form-group" >
      <label for="sel1">Verwendungszweck</label>
      <select class="form-control" id="sel1" name="zweck">
        <option>Spende Allgemein</option>
        <option>Spende Programmbezogen</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>


  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
          <label for="usr">Name der Bank</label>
          <input type="text" name="bank" class="form-control" value="<?php echo $bank;?>" required>
          <span class="error"> <?php echo $bankErr;?></span>
      </div>
      <div class="form-group">
        <label for="usr">Betrag in Euro</label>
        <input type="number" name="betrag" class="form-control" value="<?php echo $betrag;?>" required>
        <span class="error"> <?php echo $betragErr;?></span>
      </div>
      <div class="form-group">
        <label for="usr">IBAN</label>
        <input type="text" name="iban" class="form-control" value="<?php echo $iban;?>" required>
        <span class="error"> <?php echo $ibanErr;?></span>
      </div>
      <div class="form-group">
        <label for="usr">BIC</label>
        <input type="text" name="bic" class="form-control" value="<?php echo $bic;?>" required>
        <span class="error"> <?php echo $bicErr;?></span>
      </div>

    </div>

    <div class="col-sm-6">

      <div class="form-group">
        <label for="usr">Kontoinhaber (Vorname, Name)</label>
        <input type="text" name="inhaber" class="form-control" value="<?php echo $inhaber;?>" required>
        <span class="error"> <?php echo $inhaberErr;?></span>
      </div>
      <div class="form-group">
        <label for="usr">Straße, Hausnummer</label>
        <input type="text" name="adresse" class="form-control" value="<?php echo $adresse;?>" required>
        <span class="error"> <?php echo $adresseErr;?></span>
      </div>
      <div class="form-group">
        <label for="usr">PLZ, Ort</label>
        <input type="text" name="plz" class="form-control" value="<?php echo $plz;?>" required>
        <span class="error"> <?php echo $plzErr;?></span>
      </div>
      <div class="form-group">
        <label for="usr">E-Mail-Adresse (freiwillig)</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email;?>">
        <span class="error"> <?php echo $emailErr;?></span>
      </div>
    </div>
  </div>

  <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck1" name="datenschutz" required>
      <label class="custom-control-label" for="customCheck1">Ich bin damit einverstanden, dass Chance e. V. meine Daten sicher speichert (Infos zum Datenschutz)
      und diese nicht an Dritte weiter gibt.</label>
      <span class="error"> <?php echo $datenschutzErr;?></span>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 2rem;">
        <input type="checkbox" class="custom-control-input" id="customCheck2" name="newsletter">
        <label class="custom-control-label" for="customCheck2">Ich bin damit einverstanden, dass Chance e.V. mich einmal im Monat per E-Mail und zwei- bis dreimal im Jahr per Post über die Projekte und die Menschen
        vor Ort informiert. Wenn Sie keine Informationen (mehr) bekommen möchten, schreiben Sie uns: info@chance-international.org</label>
      </div>

  <input type="submit" class="btn btn-primary float-right" name="submit" value="Weiter">
</form>

</div>


  </body>
  </html>
