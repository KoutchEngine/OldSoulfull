<?php
	ob_start();
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['placeId']))
    {
        $placeId = (int)$_GET['placeId'];
        if($site->getPlace($placeId) && $site->userOwnsItem($user['id'], $placeId))
        {
            $place = $site->getPlace($placeId);
			$uid = $place['gameId'];
        } else {
            exit('');
        }
    } else {
        exit('');
    }
?>
game:SetPlaceID(1717)
game:Load("http://www.limrev.one/asset?id=1717")
<?php
$data = "\r\n" . ob_get_clean();
echo "--rbxsig%".base64_encode($roblox->sign($privatekey, $data))."%".$data;
?>