<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/configuration/loadmodules.php';
    $site->LoginState(false, true);
?>
{
    "robux": <?php echo $user['robux']; ?>,
    "tickets": 0
}