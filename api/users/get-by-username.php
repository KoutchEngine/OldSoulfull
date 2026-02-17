<?php
    include 'C:/wamp64/www/configuration/global.php';
    if(isset($_GET['username']))
    {
        $username = $_GET['username'];
        if($site->getUser($username))
        {
            $user = $site->getUser($username);
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