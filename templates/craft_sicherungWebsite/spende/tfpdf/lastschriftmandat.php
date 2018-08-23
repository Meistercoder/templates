<?php
session_start();
?>


<?php

// Optionally define the filesystem path to your system fonts
// otherwise tFPDF will use [path to tFPDF]/font/unifont/ directory
// define("_SYSTEM_TTFONTS", "C:/Windows/Fonts/");

require('tfpdf.php');

$pdf = new tFPDF();
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);

// Load a UTF-8 string from a file and print it
$pdf->Cell(180, 10, 'Lastschriftmandat', 1, 1, 'C');
$pdf->Ln(20); //10 Einheiten Zeilenabstand

$pdf->Cell(80, 8, 'Kontoinhaber');
$pdf->Write(8, $_SESSION["inhaber"]); $pdf->Ln(12);

$pdf->Cell(80, 8, 'Straße, Hausnummer');
$pdf->Write(8, $_SESSION["adresse"]); $pdf->Ln(12);

$pdf->Cell(80, 8, 'PLZ; ORT');
$pdf->Write(8, $_SESSION["plz"]); $pdf->Ln(12);

$pdf->Cell(80, 8, 'E-Mail');
$pdf->Write(8, $_SESSION["email"]); $pdf->Ln(12);

$pdf->Cell(80, 8, 'Betrag');
$pdf->Write(8, $_SESSION["betrag"] . ' EUR'); $pdf->Ln(12);

$pdf->Cell(80, 8, 'Verwendungszweck');
$pdf->Write(8, $_SESSION["zweck"]); $pdf->Ln(12);

$pdf->Cell(80, 8, 'Intervall');
$pdf->Write(8, $_SESSION["intervall"]); $pdf->Ln(12);

$pdf->Cell(80, 8, 'IBAN');
$pdf->Write(8, $_SESSION["iban"]); $pdf->Ln(12);

$pdf->Cell(80, 8, 'BIC');
$pdf->Write(8, $_SESSION["bic"]); $pdf->Ln(80);

$pdf->Write(8,'Ich/wir ermächtige(n) Chance e.V. Zahlungen von meinem/unserem Konto mittels Lastschrift einzuziehen. Zugleich weise(n) ich/wir mein/unser Kreditinstitut an, die von Chance e.V. auf mein/unser Konto gezogenen Lastschriften einzulösen. ');
$pdf->Ln(20);

$pdf->Write(8, '--------------------------------                                                          -------------------------------');
$pdf->Ln(4);
$pdf->Write(8, '        Datum, Ort                                                                              Unterschrift');


$pdf->Output();
?>
