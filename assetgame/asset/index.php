<?php
    header('Content-Type: text/raw');
    $DontIncludeMain = true;
    include $_SERVER['DOCUMENT_ROOT'] . '/configuration/loadmodules.php';
    if(isset($_GET['id']))
    {
        $id = (int)$_GET['id'];
        echo $roblox->getAsset($id);
    }
?>