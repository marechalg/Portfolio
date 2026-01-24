<?php 

$to = 'guewen.marechal@etudiant.univ-rennes.fr';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From: {$_POST['mail']}\r\n";
$headers .= "Reply-To: {$_POST['mail']}\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    header('Location: /contact?success=1');
    die();
} else {
    header('Location: /contact?error=1');
    die();
}

?>