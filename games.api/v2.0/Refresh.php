<?php
$applicationName = 'RCCService.exe';
include_once 'C:\wamp64\www\configuration\roblox.php';
include_once 'C:\wamp64\www\configuration\database.php';
$roblox = new Roblox();
    if(isset($_GET['gameTime']) && isset($_GET['port']))
	{
		$rccport = @$roblox->getRccPortFromGamePort($_GET['port']);
		if(@getallheaders()["PlayerCount"] == 0 && $_GET['gameTime'] > 60 && isset($rccport)) {
			$roblox->CloseJob($_GET['port']);
			sleep(2);
			$roblox->CloseServerFromRccPort($rccport);
		}
	}
?>
