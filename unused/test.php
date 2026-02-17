<?php
	ob_start();
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    $site->createGame("DUCK", "game testing this was made NEVER!!!!!!", $user);
?>