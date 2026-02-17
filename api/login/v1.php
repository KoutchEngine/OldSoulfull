<?php
  // username, password
  include 'C:/wamp64/www/configuration/global.php';
  $main = new Site();
  $main->LoginState(false, false);
  $Login = new Login();
  $query = "SELECT * FROM users WHERE username=:username";
  if(isset($_POST['username']))
  {
    $user = $Login->GetUserByNameAndPass($_POST['username'], $_POST['password']);
    
    if($user)
    {
      $uid = $user['id'];
      setcookie(".ROBLOSECURITY", $user['authticket'], time() + (10 * 365 * 24 * 60 * 60), "/", ".".$url);
      die("{ \"userId\": ".$uid." } "); //this aint php 8
    } else {
      die("{ \"message\": \"Credentials\" }"); 
    }
  }
?>