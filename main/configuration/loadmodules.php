<?php
    set_include_path('C:\xampp\php');
    $dir = "C:/xampp/htdocs/configuration/";
    include $dir . 'database.php';
    include 'vendor/autoload.php';
    if(!isset($DontIncludeMain)) {
        include $dir . 'main.php';
    }
    if(!isset($DontIncludeRoblox)) {
        include $dir . 'roblox.php';
    }
?>