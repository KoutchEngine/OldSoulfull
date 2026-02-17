<?php
  include 'C:/wamp64/www/configuration/global.php';
  $site->LoginState(false, false);
  $site->invitekey();

  if(!$loggedin)
  {
    http_response_code(401);
    exit();
  }
?>