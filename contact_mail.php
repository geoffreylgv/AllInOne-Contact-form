<?php
$toEmail = "zixgeoffrey2@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<" . $_POST["userEmail"] . ">\r\n";
if (mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
  echo '
<div class="tata success slide-right-in top-right" id="tata-1611852148311">
    <i class="tata-icon material-icons">check</i>
    <div class="tata-body">
      <h4 class="tata-title">Information</h4>
      <p class="tata-text">Mail envoyé avec succès. Merci !</p>
    </div>
    <button class="tata-close material-icons">clear</button>
    <div class="tata-progress" style="animation: 10s linear 0s 1 normal forwards running reduceWidth;"></div>
  </div>
';
} else {
  echo '
  <div class="tata error slide-right-in top-right" id="tata-1611852257032">
  <i class="tata-icon material-icons">block</i>
  <div class="tata-body">
  <h4 class="tata-title">Erreur</h4>
  <p class="tata-text">Une erreur est survenu lor de l\'envoi, réessayer !</p>
  </div>
  <button class="tata-close material-icons">clear</button>
  <div class="tata-progress" style="animation: 10s linear 0s 1 normal forwards running reduceWidth;"></div>
  </div>
  ';
}
