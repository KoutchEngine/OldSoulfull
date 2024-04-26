<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    if(isset($_GET['placeId']) && isset($_GET['jobid']))
    {
        $placeId = (int)$_GET['placeId'];
        if($site->getPlace($placeId) && $site->userOwnsItem($user['id'], $placeId))
        {
            $place = $site->getPlace($placeId);
        } else {
            exit('{}');
        }
    } else {
        exit('{}');
    }
?>
print("woa!")
<?php
$data = "\r\n" . ob_get_clean();
echo "--rbxsig%".base64_encode($roblox->sign($privatekey, $data))."%".$data;
?>