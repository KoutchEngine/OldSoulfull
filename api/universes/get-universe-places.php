<?php
	ob_start();
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['universeId']))
    {
        $placeId = (int)$_GET['universeId'];
        if($site->getGame($placeId))
        {
            $game = $site->getGame($placeId);
            $place = $site->getPlace($game['startPlace']);
            $uid = $game['id'];
        } else if($site->getPlace($placeId))
        {
            $place = $site->getPlace($placeId);
            $game = $site->getGame($place['gameId']);
            $uid = $game['id'];
        } else {
            exit('');
        }

        $editaccess = "false";
        if($site->userOwnsItem($user['id'], $place['id']))
        {
            $editaccess = "true";
        }
    } else {
        exit('');
    }
?>
{"FinalPage":true,"RootPlace":<?php echo $place['id']; ?>,"Places":[{"PlaceId":<?php echo $place['id']; ?>,"Name":"<?php echo protecc($place['gamename']); ?>"}],"PageSize":50}