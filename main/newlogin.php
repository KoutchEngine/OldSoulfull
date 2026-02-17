<?php
  // username, password
  include 'C:/wamp64/www/configuration/global.php';
  $main = new Site();
  $main->LoginState(false, false);
  $query = "SELECT * FROM users WHERE username=:username";
  if(isset($_POST['username']))
  {
    $usercheck = $db->prepare($query);
    $usercheck->bindParam(":username", $_POST['username']);
    $usercheck->execute();
    $usercheck = $usercheck->fetch(PDO::FETCH_ASSOC);
    
    if($usercheck)
    {
      if(password_verify($_POST['password'], $usercheck['password']))
      {
        setcookie(".ROBLOSECURITY", $usercheck['authticket'], time() + (10 * 365 * 24 * 60 * 60), "/", ".".$url);
        sleep(2);
        header('Location: http://www.limrev.one/invitekey');
      } else {
        die("password isn't correct"); 
      }
    } else {
      die("user doesn't exist");
    }
  }
?>
work in progress sorry