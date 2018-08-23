<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["datenschutz"])) {
    $datenschutzErr = " <br> Zustimmung fehlt";
  } else {
    $datenschutz = test_input($_POST["datenschutz"]);
    $_SESSION["datenschutz"] = "$datenschutz";
  }

  if (empty($_POST["intervall"])) {
    $intervallErr = "Intervall is required";
  } else {
    $intervall = test_input($_POST["intervall"]);
    $_SESSION["intervall"] = "$intervall";
  }

  if (empty($_POST["zweck"])) {
    $zweckErr = "Zweck is required";
  } else {
    $zweck = test_input($_POST["zweck"]);
    $_SESSION["zweck"] = "$zweck";
  }

  if (empty($_POST["bank"])) {
    $bankErr = "Bank is required";
  } else {
    $bank = test_input($_POST["bank"]);
    $_SESSION["bank"] = "$bank";
  }

  if (empty($_POST["betrag"])) {
    $betragErr = "Betrag fehlt";
  } else {
    $betrag = test_input($_POST["betrag"]);
    $_SESSION["betrag"] = "$betrag";
  }

  if (empty($_POST["iban"])) {
    $ibanErr = "IBAN fehlt";
  } else {
    $iban = test_input($_POST["iban"]);
    $_SESSION["iban"] = "$iban";
  }

  if (empty($_POST["bic"])) {
    $bicErr = "BIC fehlt";
  } else {
    $bic = test_input($_POST["bic"]);
    $_SESSION["bic"] = "$bic";

  }

  if (empty($_POST["inhaber"])) {
    $inhaberErr = "Inhaber fehlt";
  } else {
    $inhaber = test_input($_POST["inhaber"]);
    $_SESSION["inhaber"] = "$inhaber";
  }

  if (empty($_POST["adresse"])) {
    $adresseErr = "Adresse fehlt";
  } else {
    $adresse = test_input($_POST["adresse"]);
    $_SESSION["adresse"] = "$adresse";
  }

  if (empty($_POST["plz"])) {
    $plzErr = "PLZ fehlt";
  } else {
    $plz = test_input($_POST["plz"]);
    $_SESSION["plz"] = "$plz";
  }

  if (empty($_POST["email"])) {
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Ungütliges E-Mail Format";
    }
    $_SESSION["email"] = "$email";
  }

  if (empty($_POST["einziehen"])) {
    $einziehenErr = " <br> Zustimmung fehlt";
  } else {
    $einziehen = test_input($_POST["einziehen"]);
    $_SESSION["einziehen"] = "$einziehen";
  }

  if(isset( $_POST['newsletter'])) {
  $newsletter = $_POST['newsletter'];
  $_SESSION["newsletter"] = "$newsletter";
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
