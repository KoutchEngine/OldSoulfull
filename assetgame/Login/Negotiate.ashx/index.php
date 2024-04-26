<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    if(isset($_GET['suggest']))
    {
        $suggest = $_GET['suggest'];
        $query = "SELECT * FROM users WHERE authticket=:ticket";
        $usercheck = $db->prepare($query);
        $usercheck->execute(['ticket' => htmlspecialchars(filter_var($suggest))]);
        $usercheck = $usercheck->fetch();
        if($usercheck)
        {
            setcookie('.ROBLOSECURITY', $usercheck['authticket'], time() + (10 * 365 * 24 * 60 * 60), "/", ".".$url);
            exit("true");
        } else {
            exit("false");
        }
    } else {
        exit("false");
    }
?>