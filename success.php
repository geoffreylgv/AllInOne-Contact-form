<?php
$toEmail = "zixgeoffrey2@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='is-success'>Mail envoyé avec succès.</p>";
} else {
print "<div class="notification is-danger">Une erreur est survenu lor de l'envoi,réessayer!</div>";
}
?>