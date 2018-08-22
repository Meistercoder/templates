<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["datenschutz"])) {
    $datenschutzErr = " <br> Zustimmung fehlt";   $allesKorrekt = false;
  } else {
    $datenschutz = test_input($_POST["datenschutz"]);
    $_SESSION["datenschutz"] = "$datenschutz"; $allesKorrekt = true;
  }

  if (empty($_POST["einziehen"])) {
    $einziehenErr = " <br> Zustimmung fehlt"; $allesKorrekt = false;
  } else {
    $einziehen = test_input($_POST["einziehen"]);
    $_SESSION["einziehen"] = "$einziehen"; $allesKorrekt = true;

  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required"; $allesKorrekt = false;
  } else {
    $gender = test_input($_POST["gender"]);
    $_SESSION["gender"] = "$gender"; $allesKorrekt = true;
  }

  if (empty($_POST["zweck"])) {
    $zweckErr = "Zweck is required"; $allesKorrekt = false;
  } else {
    $zweck = test_input($_POST["zweck"]);
    $_SESSION["zweck"] = "$zweck"; $allesKorrekt = true;
  }

  if (empty($_POST["bank"])) {
    $bankErr = "Bank is required"; $allesKorrekt = false;
  } else {
    $bank = test_input($_POST["bank"]);
    $_SESSION["bank"] = "$bank"; $allesKorrekt = true;
  }

  if (empty($_POST["betrag"])) {
    $betragErr = "Betrag fehlt"; $allesKorrekt = false;
  } else {
    $betrag = test_input($_POST["betrag"]);
    $_SESSION["betrag"] = "$betrag"; $allesKorrekt = true;
  }

  if (empty($_POST["iban"])) {
    $ibanErr = "IBAN fehlt"; $allesKorrekt = false;
  } else {
    $iban = test_input($_POST["iban"]);
    $_SESSION["iban"] = "$iban"; $allesKorrekt = true;
  }

  if (empty($_POST["bic"])) {
    $bicErr = "BIC fehlt"; $allesKorrekt = false;
  } else {
    $bic = test_input($_POST["bic"]);
    $_SESSION["bic"] = "$bic"; $allesKorrekt = true;

  }

  if (empty($_POST["inhaber"])) {
    $inhaberErr = "Inhaber fehlt"; $allesKorrekt = false;
  } else {
    $inhaber = test_input($_POST["inhaber"]);
    $_SESSION["inhaber"] = "$inhaber"; $allesKorrekt = true;
  }

  if (empty($_POST["adresse"])) {
    $adresseErr = "Adresse fehlt"; $allesKorrekt = false;
  } else {
    $adresse = test_input($_POST["adresse"]);
    $_SESSION["adresse"] = "$adresse"; $allesKorrekt = true;
  }

  if (empty($_POST["plz"])) {
    $plzErr = "PLZ fehlt"; $allesKorrekt = false;
  } else {
    $plz = test_input($_POST["plz"]);
    $_SESSION["plz"] = "$plz"; $allesKorrekt = true;
  }

  if (empty($_POST["email"])) {
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Ungütliges E-Mail Format";
    }
    $_SESSION["email"] = "$email"; $allesKorrekt = true;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
