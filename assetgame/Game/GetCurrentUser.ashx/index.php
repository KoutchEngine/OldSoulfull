<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    echo $user['id'];
?>