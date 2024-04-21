<?php
    $dir = "C:/xampp/htdocs/configuration/";
    include $dir . 'database.php';
    if(!isset($DontIncludeMain)) {
        include $dir . 'main.php';
    }
    if(!isset($DontIncludeRoblox)) {
        include $dir . 'roblox.php';
    }
?>