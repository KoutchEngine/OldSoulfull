<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(!isset($_GET['placeId']))
    {
        die();
    }
?>
<h2>Choose a place!</h2>
<?php
    $query = "SELECT * FROM games WHERE id=:id AND creatorid=:cid";
    $gamescheck = $db->prepare($query);
    $gamescheck->execute(['id' => $_GET['placeId'], 'cid' => $user['id']]);
    $gamescheck = $gamescheck->fetchAll();
    foreach($gamescheck as $game)
    {
        $query = "SELECT * FROM places WHERE gameId=:id";
        $placescheck = $db->prepare($query);
        $placescheck->execute(['id' => $game['id']]);
        $placescheck = $placescheck->fetchAll();
        foreach($placescheck as $place)
        {
            echo '<h3><a href="http://www.'.$url.'/ide/publish/editplace?placeId='.$place['id'].'">'.protecc($place['gamename']).'</a></h3><br>';
        }
    }
?>