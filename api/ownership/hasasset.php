<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['userId']) && isset($_GET['assetId']))
    {
        $userid = (int)$_GET['userId'];
        $assetid = (int)$_GET['assetId'];
        
        if($site->userOwnsItem($userid, $assetid))
        {
            exit('true');
        } else {
            exit('false');
        }
    } else {
        exit('false');
    }
?>