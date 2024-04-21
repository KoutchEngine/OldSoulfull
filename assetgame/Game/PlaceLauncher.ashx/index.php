<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/configuration/loadmodules.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
?>
{"jobId": "Test","status":2,"joinScriptUrl":"http://assetgame.<?php echo $url; ?>/Game/Join.ashx","authenticationUrl":"https://assetgame.<?php echo $url; ?>/Login/Negotiate.ashx","authenticationTicket": "<?php echo $user['authticket']; ?>","message":"Success"}