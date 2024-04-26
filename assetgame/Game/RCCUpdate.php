<?php
    if($_SERVER['REMOTE_ADDR'] == "26.136.77.48")
    {
        include 'C:/xampp/htdocs/configuration/database.php';
        $job = $_GET['job'];
        $players = (int)$_GET['players'];
        $port = (int)$_GET['port'];

        if($players == 0)
        {
            $query = "DELETE FROM `jobs` WHERE jobid=:id";
            $jobcheck = $db->prepare($query);
            $jobcheck->execute(['id' => $job]);
            include 'C:/xampp/htdocs/configuration/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php';
            $soap = new RCCServiceSoap("26.136.77.48", $port);
            $soap->CloseJob($job);
        }
    }
?>