<?php
$empfaenger     = "dr.florianbosse@posteo.de";
$betreff_prefix = "[Kontaktformular drbosse.de] ";
$weiterleitung_ok     = "https://drbosse.de/kontakt.php?status=ok";
$weiterleitung_fehler = "https://drbosse.de/kontakt.php?status=fehler";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    die("Methode nicht erlaubt.");
}

function bereinigen($wert) {
    return htmlspecialchars(strip_tags(trim($wert)));
}

$name      = bereinigen($_POST["name"]    ?? "");
$email     = bereinigen($_POST["email"]   ?? "");
$nachricht = bereinigen($_POST["message"] ?? "");

if (empty($name) || empty($email) || empty($nachricht)) {
    header("Location: " . $weiterleitung_fehler);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: " . $weiterleitung_fehler);
    exit;
}

if (!empty($_POST["website"])) {
    header("Location: " . $weiterleitung_ok);
    exit;
}

$nachricht_text = "
Neue Kontaktanfrage über drbosse.de
=====================================
Name:    $name
E-Mail:  $email

Nachricht:
----------
$nachricht

=====================================
Gesendet am: " . date("d.m.Y H:i:s") . "
";

$headers  = "From: noreply@drbosse.de\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$gesendet = mail($empfaenger, $betreff_prefix, $nachricht_text, $headers);

if ($gesendet) {
    header("Location: " . $weiterleitung_ok);
} else {
    header("Location: " . $weiterleitung_fehler);
}
exit;
?>
