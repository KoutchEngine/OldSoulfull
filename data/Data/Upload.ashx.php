<?php
    include 'C:/xampp/htdocs/configuration/global.php';
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
            $placeVersion = $gamescheck['placeVersion'] + 1;
            file_put_contents('C:/xampp/htdocs/configuration/Assets/'.$placeid.'-'.$placeVersion, $game);
            file_put_contents('C:/xampp/htdocs/configuration/Assets/'.$placeid, $game);
            $query = "UPDATE `places` SET `placeVersion`=:pv WHERE id=:id AND creatorId=:cid";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $placeid, 'cid' => $user['id'], 'pv' => $placeVersion]);
        } else {
            die();
        }
    } else {
        die();
    }
?>