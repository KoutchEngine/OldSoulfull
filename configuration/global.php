<?php
    if(!isset($DontSetAccessHeaders))
    {
        header('Access-Control-Allow-Origin: https://www.s16rev.xyz');
        header('Access-Control-Allow-Credentials: true');
    }
    $dir = "C:/xampp/htdocs/configuration/";
    include $dir . 'database.php';
    if(!isset($DontIncludeMain)) {
        include $dir . 'main.php';
        $site = new Site();
    }
    if(!isset($DontIncludeRoblox)) {
        include $dir . 'roblox.php';
        $roblox = new Roblox();
    }
?>