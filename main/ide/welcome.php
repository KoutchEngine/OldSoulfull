<?php
  // username, password
  include 'C:/xampp/htdocs/configuration/global.php';
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
        sleep(8);
        header('Location: http://www.s16rev.xyz/invitekey');
      } else {
        die("password isn't correct"); 
      }
    } else {
      die("user doesn't exist");
    }
  }

if(!$loggedin)
{
?>

<h1>form</h1>
<form method="POST">
  <input name="username" placeholder="myepicusername123"><br>
  <input name="password" type="password" placeholder="mypassword24"><br>
  <input type="submit">
</form>

<?php
} else {
?>

<h2>Welcome to Soulfull, <?php echo $user['username']; ?>! You can choose a game to edit, or, make a new game.</h2>
<?php
    $query = "SELECT * FROM games WHERE creatorid=:id";
    $gamescheck = $db->prepare($query);
    $gamescheck->execute(['id' => $user['id']]);
    $gamescheck = $gamescheck->fetchAll();
    foreach($gamescheck as $game)
    {
        $query = "SELECT * FROM places WHERE id=:id";
        $placescheck = $db->prepare($query);
        $placescheck->execute(['id' => $game['startPlace']]);
        $place = $placescheck->fetch();
        echo '<h3><a href="http://www.'.$url.'/ide/editgame?placeId='.$game['id'].'">'.$place['gamename'].'</a></h3><br>';
    }
?>

<?php
}
?>