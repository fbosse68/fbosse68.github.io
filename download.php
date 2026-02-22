<?php
$passwort = "heartfulness26";
$erlaubte_ordner = ["kurs", "oeffentlich"];
$geschuetzte_ordner = ["kurs"];

$pw = $_POST["passwort"] ?? "";
$datei = $_GET["datei"] ?? "";
$ordner = $_GET["ordner"] ?? "";

if (!in_array($ordner, $erlaubte_ordner)) {
    http_response_code(403);
    die("Zugriff verweigert.");
}

$pfad = __DIR__ . "/downloads/" . $ordner . "/" . basename($datei);

if (in_array($ordner, $geschuetzte_ordner) && $pw !== $passwort) {
    http_response_code(401);
    die("Falsches Passwort.");
}

if (!file_exists($pfad)) {
    http_response_code(404);
    die("Datei nicht gefunden.");
}

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=" . basename($datei));
readfile($pfad);
exit;
