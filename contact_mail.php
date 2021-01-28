<?php
$toEmail = "zixgeoffrey2@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='is-success'>Mail envoyé avec succès.</p>";
} else {
echo "<div class="tata info slide-right-in top-right" id="tata-1611833789956">
    <i class="tata-icon material-icons">forum</i>
    <div class="tata-body">
      <h4 class="tata-title">Hello</h4>
      <p class="tata-text">Une erreur est survenu lor de l'envoi, réessayer !</p>
    </div>
    <button class="tata-close material-icons">clear</button>
    
  </div>";
}
?>