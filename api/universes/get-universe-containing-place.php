<?php
	ob_start();
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['placeid']))
    {
        $placeId = (int)$_GET['placeid'];
        if($site->getPlace($placeId))
        {
            $place = $site->getPlace($placeId);
			$uid = $place['gameId'];
            exit('{"UniverseId":'.$uid.'}');
        } else {
            exit('');
        }
    } else {
        exit('');
    }
?>