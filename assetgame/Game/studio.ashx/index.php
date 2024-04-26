<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
?>
{"PingReceiver":"http://www.<?php echo $url; ?>/Game/ClientPresence.ashx?version=old&PlaceID=0","PingIntervalInSeconds":120,"UserId":"<?php echo $user['id']; ?>","MainGuiScriptID":37801172,"AssetUrl":"http://www.<?php echo $url; ?>/Asset/","BaseUrl":"http://www.<?php echo $url; ?>/","ApiProxyEndPoint":"https://api.<?php echo $url; ?>"}
<?php
$data = "\r\n" . ob_get_clean();
echo "--rbxsig%".base64_encode($roblox->sign($privatekey, $data))."%".$data;
?>