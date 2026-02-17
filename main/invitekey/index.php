<?php
  include 'C:/wamp64/www/configuration/global.php';
  $site->LoginState(false, true);
  $site->invitekey();

  if(isset($_POST['key']))
  {
    $query = "SELECT * FROM `invitekeys` WHERE invitekey=:username";
    $usercheck = $db->prepare($query);
    $usercheck->bindParam(":username", $_POST['key']);
    $usercheck->execute();
    $usercheck = $usercheck->fetch(PDO::FETCH_ASSOC);
    
    if($usercheck)
    {
      // we finna be playing remix 10 as we get verified
      $query = "DELETE FROM `invitekeys` WHERE invitekey=:username";
      $usercheck = $db->prepare($query);
      $usercheck->bindParam(":username", $_POST['key']);
      $usercheck->execute();
      $query = "UPDATE `users` SET `activated`=true WHERE username=:username";
      $usercheck = $db->prepare($query);
      $usercheck->bindParam(":username", $user['username']);
      $usercheck->execute();
      header('Location: ../home');
    } else {
     echo "<h1>wrong key buddy</h1><br>"; 
    }
  }
?>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.css'>
<h2>Invite Key Page</h2><br>
<h2>(You registered successfully btw)</h2><br>
<form method="POST">
<center>  <input name="key" placeholder="Soulfull1"> <center>
  <input type="submit">