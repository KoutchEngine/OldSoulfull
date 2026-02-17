<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
?>
<h2>Upload a game!</h2>
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
        echo '<h3><a href="http://www.'.$url.'/ide/publish/subplace?placeId='.$game['id'].'">'.protecc($place['gamename']).'</a></h3><br>';
    }
?>
<h3><a href="http://www.<?php echo $url; ?>/ide/publish/newgame.php">Or make a new game!</a></h3>