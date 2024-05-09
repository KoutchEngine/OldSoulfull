<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    if(isset($_GET['placeId']))
    {
        $placeId = (int)$_GET['placeId'];
        if($site->getPlace($placeId))
        {
            $place = $site->getPlace($placeId);
            $query = "SELECT * FROM jobs WHERE placeid=:id";
            $jobcheck = $db->prepare($query);
            $jobcheck->execute(['id' => $placeId]);
            $job = $jobcheck->fetch();
            if($job)
            {
                $jobid = $job['jobid'];
            } else {
                $port = rand(1337,53640);
                $part1 = bin2hex(random_bytes(6));
                $part2 = bin2hex(random_bytes(4));
                $part3 = bin2hex(random_bytes(4));
                $part4 = bin2hex(random_bytes(4));
                $part5 = bin2hex(random_bytes(8));
                
                $jobid = $part1."-".$part2."-".$part3."-".$part4."-".$part5;
                $roblox->placeStart($placeId, $port, $jobid, false, false, false);
                $query = "INSERT INTO `jobs`(`jobid`, `placeid`, `port`) VALUES (:jid, :id, :port)";
                $jobquery = $db->prepare($query);
                $jobquery->execute(['id' => $placeId, 'jid' => $jobid, 'port' => $port]);
            }
        } else {
            exit('{"Error" : "Invalid request type"}');
        }
    } else {
        exit('{"Error" : "Invalid request type"}');
    }
?>
{"status":2,"joinScriptUrl":"http://assetgame.<?php echo $url; ?>/Game/Join.ashx?placeId=<?php echo $place['id']; ?>&jobid=<?php echo $jobid; ?>","authenticationUrl":"https://assetgame.<?php echo $url; ?>/Login/Negotiate.ashx","authenticationTicket": "<?php echo $user['authticket']; ?>","message":"Success"}