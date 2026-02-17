<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['badgeId']) && isset($_GET['placeId']))
    {
        $badgeid = (int)$_GET['badgeId'];
        $placeId = (int)$_GET['placeId'];

        if(!$site->userOwnsItem($user['id'], $badgeid))
        {
            $badge = $site->getBadge($badgeid);
            $badgecreator = $site->getUser($badge['creatorId']);
            $badgeCreatorName = $badgecreator['username'];
            $badgeName = $badge['badgeName'];
            $userName = $user['username'];
            $query = "INSERT INTO `owneditems`(`userId`, `itemId`, `type`) VALUES (:u,:i,'Badge')";
            $addbadge = $db->prepare($query);
            $addbadge->execute(['u' => $user['id'], 'i' => $badgeid]);
        } else {
            header('HTTP/1.1 401 Unauthorized');
        }
    } else {
        header('HTTP/1.1 401 Unauthorized');
    }
?>
<?php echo $userName; ?> won <?php echo $badgeCreatorName; ?>'s "<?php echo $badgeName; ?>" award!