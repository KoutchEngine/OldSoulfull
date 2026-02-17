<?php
  header("Content-Type: application/json");
  include_once 'C:\wamp64\www\configuration\database.php';
  include_once 'C:\wamp64\www\configuration\main.php';
  $site = new Site();
  include_once 'C:\wamp64\www\configuration\roblox.php';
  $roblox = new Roblox();

  $user = $site->getUserFromAuthTicket($_COOKIE['_ROBLOSECURITY']);

  $job = $roblox->JobIdExistsForPlace(@$_GET['placeId'], @$_GET['jobId']);
  if($job) {
    $jobid = $_GET['jobId'];
  } else {
    $jobid = "Test"; 
    $job = [];
    $job['port'] = 53640;
  }

  $place = $site->getPlace(@$_GET['placeId']);

  if(isset($_GET["settingsfile"])||(isset($_GET["local"])&&$_GET["local"]=='true')) { //if you remove this you are bad bad
    $ip = "127.0.0.1";
    $jobid = "Test"; 
	  $job['port'] = 53640;
  }

  //do not touch clienttickets until further notice
  //$entry1 = $user['id']."\n".$user['username']."\nhttps://api.".$url."/v1.1/avatar-fetch/?placeId=0&userId=0\n".$jobid."\n".time(); //bad for some reason
  $entry1 = $user['id']."\n".$user['username']."\n".$user['id']."\n".$jobid."\n".time();
  $entry2 = $user['id']."\n".$jobid."\n".time();
  $ticket1 = base64_encode($roblox->sign($privatekey2018, $entry1));
  $ticket2 = base64_encode($roblox->sign($privatekey2018, $entry2));
  $clientticket = time().";".$ticket1.";".$ticket2.";2";
?>
{"ClientPort":0,"MachineAddress":"<?= "{$ip}" ?>","ServerPort":<?= @$job['port']; ?>,"PingUrl":"","PingInterval":120,"UserName":"<?= $user['username']; ?>","DisplayName":"<?= $user['displayName']; ?>","SeleniumTestMode":false,"UserId":<?= $user['id']; ?>,"RobloxLocale":"en_us","GameLocale":"en_us","SuperSafeChat":false,"CharacterAppearance":"https://api.<?= $url ?>/v1.1/avatar-fetch/?placeId=0&userId=0","ClientTicket":"<?= $clientticket ?>","GameId":"Test","PlaceId":<?= $place['id']; ?>,"MeasurementUrl":"","WaitingForCharacterGuid":"1328d3c8-75e0-47c8-a55a-926955cb8b30","BaseUrl":"http://assetgame.<?= $url; ?>/","ChatStyle":"Classic","VendorId":0,"ScreenShotInfo":"","VideoInfo":"<entry xmlns=\"http://www.w3.org/2005/Atom\" xmlns:media=\"http://search.yahoo.com/mrss/\" xmlns:yt=\"http://gdata.youtube.com/schemas/2007\"><media:group><media:title type=\"plain\"><![CDATA[ROBLOX Place]]></media:title><media:description type=\"plain\"><![CDATA[ For more games visit http://www.roblox.com]]></media:description><media:category scheme=\"http://gdata.youtube.com/schemas/2007/categories.cat\">Games</media:category><media:keywords>ROBLOX, video, free game, online virtual world</media:keywords></media:group></entry>","CreatorId":1,"CreatorTypeEnum":"User","MembershipType":"None","AccountAge":365,"CookieStoreFirstTimePlayKey":"rbx_evt_ftp","CookieStoreFiveMinutePlayKey":"rbx_evt_fmp","CookieStoreEnabled":true,"IsRobloxPlace":true,"GenerateTeleportJoin":false,"IsUnknownOrUnder13":false,"SessionId":"{\"SessionId\":\"0703f51f-5772-4a74-933b-b7019b1240ee\",\"GameId\":\"<?= $jobid; ?>\",\"PlaceId\":<?= $place['id']; ?>,\"ClientIpAddress\":\"69.69.69.69.69\",\"PlatformTypeId\":5,\"SessionStarted\":\"2019-10-18T00:34:21.7724328Z\",\"BrowserTrackerId\":0,\"PartyId\":null,\"Age\":null,\"Latitude\":37.751,\"Longitude\":-97.822,\"CountryId\":1,\"PolicyCountryId\":null,\"LanguageId\":null,\"BlockedPlayerIds\":null,\"JoinType\":\"Unknown\"}","AnalyticsSessionId":"0703f51f-5772-4a74-933b-b7019b1240ee","DataCenterId":0,"UniverseId":<?= $place['gameId']; ?>,"BrowserTrackerId":0,"UsePortraitMode":false,"FollowUserId":0,"characterAppearanceId":<?= $user['id']; ?>,"CountryCode":"US"}
<?php
$data = "\r\n". ob_get_clean();
echo "--rbxsig2%".base64_encode($roblox->sign($privatekey2018, $data))."%".$data;
?>