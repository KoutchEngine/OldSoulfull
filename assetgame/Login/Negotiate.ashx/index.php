<?php
    include 'C:/wamp64/www/configuration/global.php';
    $suggest = null;
    
    if (isset($_GET['suggest'])) {
        $suggest = $_GET['suggest'];
    }

    if (isset($_POST['suggest'])) {
        $suggest = $_POST['suggest'];
    }

    if (isset($suggest)) {
        $query = "SELECT * FROM users WHERE authticket=:ticket";
        $usercheck = $db->prepare($query);
        $usercheck->execute(['ticket' => $suggest]);
        $usercheck = $usercheck->fetch();
        if ($usercheck) {
            setcookie('.ROBLOSECURITY', $usercheck['authticket'], time() + (10 * 365 * 24 * 60 * 60), "/", "assetgame.".$url);
            setcookie('.ROBLOSECURITY', $usercheck['authticket'], time() + (10 * 365 * 24 * 60 * 60), "/", ".".$url);
            exit("true");
        } else {
            exit("false");
        }
    } else {
        exit("false");
    }
?>