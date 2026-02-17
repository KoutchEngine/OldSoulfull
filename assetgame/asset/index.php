<?php
ob_start();

    header('Content-Type: text/raw');
    $FlagsToReplace = [
        "SetAccessHeaders" => false
    ];
    //ob_start();
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, false);
    if(isset($_GET['id']))
    {
        $id = (int)$_GET['id'];
        $version = 0;

        if(isset($_GET['version'])) {
            $version = (int)$_GET['version'];
        }

        /*$game = $site->getGame($id);
        if($game) {
          $id = $game['startPlace'];
        }*/
		
        $asset = $roblox->getAsset($id,$version);
		$assetdata = @gzdecode($asset);
        if(strlen($assetdata)<5){
                $assetdata = $asset;
        }
        //file_put_contents("C:\wamp64\www\configuration\\".$id,$asset);
        //ob_end_clean();
        ob_end_clean();
        if($assetdata) {
			header('Content-Type: application/octet-stream');
            die($assetdata);
        } else {
            //http_response_code(403);
            die($assetdata);
        }
    }
?>