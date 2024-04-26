<?php
    header('Content-Type: text/raw');
    $DontIncludeMain = true;
    include 'C:/xampp/htdocs/configuration/global.php';
    if(isset($_GET['id']))
    {
        $id = (int)$_GET['id'];
        echo $roblox->getAsset($id);
    }
?>