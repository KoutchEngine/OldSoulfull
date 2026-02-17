<?php
    if($_SERVER['REMOTE_ADDR'] == "::1")
    {
        include 'C:/wamp64/www/configuration/database.php';
        $job = $_GET['job'];
        $players = (int)$_GET['players'];
        $port = (int)$_GET['port'];

        if($players == 0)
        {
            $query = "DELETE FROM `jobs` WHERE jobid=:id";
            $jobcheck = $db->prepare($query);
            $jobcheck->execute(['id' => $job]);
            include 'C:/wamp64/www/configuration/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php';
            /*$soap = new RCCServiceSoap("1184.15.207.198", $port);
            $soap->CloseJob($job);*/
        }
    }
?>