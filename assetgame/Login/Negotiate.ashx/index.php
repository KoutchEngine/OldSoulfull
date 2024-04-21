<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/configuration/loadmodules.php';
    if(isset($_GET['suggest']))
    {
        $suggest = $_GET['suggest'];
        $query = "SELECT * FROM users WHERE authticket=:ticket";
        $usercheck = $db->prepare($query);
        $usercheck->execute(['ticket' => htmlspecialchars(filter_var($suggest))]);
        $usercheck = $usercheck->fetch();
        if($usercheck)
        {
            setcookie('.ROBLOSECURITY', $usercheck['authticket'], time() + (12 * 24 * 39 * 35 ), "/", ".".$url);
            exit("true");
        } else {
            exit("false");
        }
    } else {
        exit("false");
    }
?>