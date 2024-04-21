<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/configuration/loadmodules.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    $entry1 = $user['id']."\n".$user['username']."\nhttps://assetgame.".$url."/v1.1/avatar-fetch?userid=".$user['id']."\nTest"."\n".time();
    $entry2 = $user['id']."\nTest"."\n".time();
    $ticket1 = base64_encode($roblox->sign($privatekey, $entry1));
    $ticket2 = base64_encode($roblox->sign($privatekey, $entry2));
    $clientticket = time().";".$ticket1.";".$ticket2;
?>
{"ClientPort":0,"MachineAddress":"127.0.0.1","ServerPort":53640,"PingUrl":"","PingInterval":20,"UserName":"<?php echo $user['username']; ?>","SeleniumTestMode":false,"UserId":<?php echo $user['id']; ?>,"SuperSafeChat":false,"CharacterAppearance":"https://assetgame.<?php echo $url; ?>/v1.1/avatar-fetch?userid=<?php echo $user['id']; ?>","ClientTicket":"<?php echo $clientticket; ?>","GameId":"Test","PlaceId":1818,"MeasurementUrl":"","WaitingForCharacterGuid":"26eb3e21-aa80-475b-a777-b43c3ea5f7d2","BaseUrl":"https://assetgame.<?php echo $url; ?>/","ChatStyle":"Classic","VendorId":0,"ScreenShotInfo":"","VideoInfo":"","CreatorId":1,"CreatorTypeEnum":"User","MembershipType":"None","AccountAge":0,"CookieStoreFirstTimePlayKey":"rbx_evt_ftp","CookieStoreFiveMinutePlayKey":"rbx_evt_fmp","CookieStoreEnabled":true,"IsRobloxPlace":true,"GenerateTeleportJoin":false,"IsUnknownOrUnder13":false,"SessionId":"39412c34-2f9b-436f-b19d-b8db90c2e186|00000000-0000-0000-0000-000000000000|0|0|8|2021-03-03T17:04:47+01:00|0|null|null","DataCenterId":0,"UniverseId":1819,"BrowserTrackerId":0,"UsePortraitMode":false,"FollowUserId":0,"characterAppearanceId":1}
<?php
$data = "\r\n" . ob_get_clean();
echo "--rbxsig%".base64_encode($roblox->sign($privatekey, $data))."%".$data;
?>