<?php
$userName = $_POST["userName"];
$userMail = $_POST["userEmail"];
$userSubject = $_POST["subject"];
$userContent = $_POST["content"];
$toEmail = "yourmail@gmail.com";
$mailHeaders = "From: " . $userName . "<" . $userMail . ">\r\n";

$bodySuccessText = '<div class="tata success slide-right-in top-right" id="tata-1611852148311">
    <i class="tata-icon material-icons">check</i>
    <div class="tata-body">
      <h4 class="tata-title">Information</h4>
      <p class="tata-text">Mail envoyé avec succès. Merci !</p>
    </div>
    <button class="tata-close material-icons">clear</button>
    <div class="tata-progress" style="animation: 10s linear 0s 1 normal forwards running reduceWidth;"></div>
  </div>';

$mail_msg = " 
            <h3 style='text-align:center;'>Hi Geoffrey, Message from <a href='mailto:$userMail'>$userMail</a>.</h3>
            <p style='text-align:center;'><b>Subject: $userSubject</b></p>
            <p style='text-align:center;'>$userContent;</p>
        ";

if (mail($toEmail, $userSubject, $mail_msg, $mailHeaders)) {
  echo $bodyText;
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

