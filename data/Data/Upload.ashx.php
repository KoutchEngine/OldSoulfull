<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['assetId']))
    {
        $placeid = (int)$_GET['assetId'];
        $query = "SELECT * FROM places WHERE id=:id AND creatorId=:cid";
        $gamescheck = $db->prepare($query);
        $gamescheck->execute(['id' => $placeid, 'cid' => $user['id']]);
        $gamescheck = $gamescheck->fetch();
        if($gamescheck)
        {
            $game = gzdecode(file_get_contents('php://input'));
            $place = $site->getPlace($placeid);
            $placeVersion = $gamescheck['placeVersion'] + 1;
            file_put_contents('C:/wamp64/www/configuration/Assets/'.$placeid.'-'.$placeVersion, $game);
            file_put_contents('C:/wamp64/www/configuration/Assets/'.$placeid, $game);
            $query = "UPDATE `places` SET `placeVersion`=:pv,`updatedTime`=:ut WHERE id=:id AND creatorId=:cid";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $placeid, 'cid' => $user['id'], 'pv' => $placeVersion, 'ut' => time()]);
            $roblox->renderGame($placeid, 150, 150, true);
        } else {
            header('HTTP/1.1 401 Unauthorized');
        }
    } else {
        header('HTTP/1.1 401 Unauthorized');
    }
?>