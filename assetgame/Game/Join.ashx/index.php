<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    if(isset($_GET['placeId']) && isset($_GET['jobid']))
    {
        $placeId = (int)$_GET['placeId'];
        $jobid = $_GET['jobid'];
        $query = "SELECT * FROM `jobs` WHERE jobid=:id";
        $jobcheck = $db->prepare($query);
        $jobcheck->execute(['id' => $jobid]);
        $job = $jobcheck->fetch();
        if($site->getPlace($placeId) && $job)
        {
            $place = $site->getPlace($placeId);
            $entry1 = $user['id']."\n".$user['username']."\nhttps://api.".$url."/v1.1/avatar-fetch?userid=".$user['id']."\n".$jobid."\n".time();
            $entry2 = $user['id']."\n".$jobid."\n".time();
            $ticket1 = base64_encode($roblox->sign($privatekey, $entry1));
            $ticket2 = base64_encode($roblox->sign($privatekey, $entry2));
            $clientticket = time().";".$ticket1.";".$ticket2;
        } else {
            exit('{}');
        }
    } else {
        exit('{}');
    }
?>
{"ClientPort":0,"MachineAddress":"26.136.77.48","ServerPort":<?php echo $job['port']; ?>,"PingUrl":"http://www.<?php echo $url; ?>/Game/ClientPresence.ashx?version=old&PlaceID=<?php echo $placeId; ?>","PingInterval":20,"UserName":"<?php echo $user['username']; ?>","SeleniumTestMode":false,"UserId":<?php echo $user['id']; ?>,"SuperSafeChat":false,"CharacterAppearance":"https://api.<?php echo $url; ?>/v1.1/avatar-fetch?userid=<?php echo $user['id']; ?>","ClientTicket":"<?php echo $clientticket; ?>","GameId":"<?php echo $jobid; ?>","PlaceId":<?php echo $place['id']; ?>,"MeasurementUrl":"","WaitingForCharacterGuid":"26eb3e21-aa80-475b-a777-b43c3ea5f7d2","BaseUrl":"https://assetgame.<?php echo $url; ?>/","ChatStyle":"Classic","VendorId":0,"ScreenShotInfo":"","VideoInfo":"","CreatorId":<?php echo $place['creatorId']; ?>,"CreatorTypeEnum":"User","MembershipType":"None","AccountAge":0,"CookieStoreFirstTimePlayKey":"rbx_evt_ftp","CookieStoreFiveMinutePlayKey":"rbx_evt_fmp","CookieStoreEnabled":true,"IsRobloxPlace":true,"GenerateTeleportJoin":false,"IsUnknownOrUnder13":false,"SessionId":"39412c34-2f9b-436f-b19d-b8db90c2e186|<?php echo $jobid; ?>|0|0|8|2021-03-03T17:04:47+01:00|0|null|null","DataCenterId":0,"UniverseId":<?php echo $place['gameId']; ?>,"BrowserTrackerId":0,"UsePortraitMode":false,"FollowUserId":0,"characterAppearanceId":1}
<?php
$data = "\r\n" . ob_get_clean();
echo "--rbxsig%".base64_encode($roblox->sign($privatekey, $data))."%".$data;
?>