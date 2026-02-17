<?php
    include 'C:/wamp64/www/configuration/global.php';
    if(isset($_GET['userId']))
    {
        $userid = (int)$_GET['userId'];
        if($site->getUser($userid))
        {
            $user = $site->getUser($userid);
            $uid = $user['id'];
            $uname = $user['username'];
            die("{
                \"Id\": $uid,
                \"Username\": \"$uname\"
            }");
        } else {
            die();
        }
    } else {
        die();
    }
?>