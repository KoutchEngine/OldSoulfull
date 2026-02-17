<?php
$year = "2018";

if (isset($_GET["year"])) {
  $arbisettings = json_decode(file_get_contents("C:/Soulfull/Arbiter/settings.json"));
  $year = $_GET["year"];
  if (!array_search($year, $arbisettings->types)) {
    $year = "2018";
  }
}

$disablepopen = false; // Setting to true will stop execInBackground from using popen, and instead exec.
$disableexec = false; // Setting to true will stop execInBackground from using exec.

// Things you can also edit HOWEVER, beware, as this can potientially break soulfull's backend.
$privatekey = file_get_contents('C:/wamp64/www/configuration/PrivateKeys_VERYVERYPRIVATE/PrivateKey2016.pem');
$privatekey2018 = file_get_contents('C:/wamp64/www/configuration/PrivateKeys_VERYVERYPRIVATE/PrivateKey2018.pem');

// For here, it's advised not to touch, unless you know what you're doing.
class Roblox
{
  public function execInBackground($cmd)
  {
    global $disableexec;
    global $disablepopen;
    if (substr(php_uname(), 0, 7) == "Windows" && !$disablepopen) {
      $funny = popen($cmd, "w");
      return $funny;
    } else {
      if (!$disableexec) {
        exec($cmd . " > /dev/null &");
      }
    }
  }

  public function OpenJob($BatchJob, $port, $script, $leaseamount, $jobid = null)
  {
    //include 'Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php';
    if (!$jobid) {
      $jobid = bin2hex(random_bytes(10));
    }
    $soap = new RCCServiceSoap("127.0.0.1", $port);
    $jobclass = new Job($jobid);
    $scriptclass = new ScriptExecution($jobid, $script);
    if ($BatchJob) {
      $job = $soap->BatchJobEx($jobclass, $scriptclass);
      $result = base64_encode($job);
      return $result;
    } else {
      $job = $soap->OpenJobEx($jobclass, $scriptclass);
      $soap->RenewLease($jobid, $leaseamount);
      return $jobid;
    }
  }

  public function CloseJob($port = 0)
  {
    include 'Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php';
    $jobid = $this->getJobIdFromPort($port);
    $port = $this->getRccPortFromGamePort($port);
    if (!$jobid) {
      $jobid = bin2hex(random_bytes(10));
    }
    $soap = new RCCServiceSoap("127.0.0.1", $port);
    $job = $soap->CloseJob($jobid);
    $this->RemoveJobFromDB($jobid);
    return true;
  }

  private function portRoll($min, $max)
  {
    $port = rand($min, $max);
    if ($port == 80 || $port == 443 || $port == 8954) {
      return $this->portRoll($min, $max);
    }

    return $port;
  }

  public function getJobIdFromPort($id)
  {
    global $db;
    $id = (int)$id;
    $query = "SELECT * FROM jobs WHERE port=:id";
    $gamescheck = $db->prepare($query);
    $gamescheck->execute(['id' => $id]);
    $gamescheck = $gamescheck->fetch()['jobid'];
    return $gamescheck;
  }

  public function getRccPortFromGamePort($port)
  {
    global $db;
    $port = (int)$port;
    $query = "SELECT * FROM jobs WHERE port=:port";
    $gamescheck = $db->prepare($query);
    $gamescheck->execute(['port' => $port]);
    $gamescheck = $gamescheck->fetch()['rccport'];
    return $gamescheck;
  }

  public function RemoveJobFromDB($jobid)
  {
    global $db;
    $query = "DELETE FROM jobs WHERE jobid=:jobid";
    $check = $db->prepare($query);
    $check->execute(['jobid' => $jobid]);
    return true;
  }

  public function startServer($placeid = 1818, $gameid = 1818, $isVIPServer = false, $iscloudedit = false, $port = 0, $isteamtest = false)
  {
    global $url;
    global $db;
    global $arbiter;
    global $year;
    $RCCport = $this->portRoll(5879, 6078);

    /*$cid = 1;
            if($iscloudedit) {
              $cid = 3;
            } else if ($isVIPServer) {
              $cid = 2;
            } else if($isteamtest) {
              $cid = 4;
            }*/

    /*$gameserverscript = file_get_contents('http://assetgame.'.$url.'/game/gameserver.ashx');
            $gameserverscript = str_replace("%port%", $port, $gameserverscript);
            $gameserverscript = str_replace("%pid%", $placeid, $gameserverscript);
            $gameserverscript = str_replace("%url%", $url, $gameserverscript);
            $gameserverscript = str_replace("%matchmakingContextId%", $cid, $gameserverscript);
            $gameserverscript = str_replace("%uid%", $gameid, $gameserverscript);*/

    $thing = @$arbiter->GetServerPort($year);

    if ($thing == null) { //The arbiter is DEAD
      return null;
    }

    //if($thing == -1) {
    $arbiter->StartRCC($RCCport, $year);
    /*} else {
              $RCCport = $thing->port;
            }*/

    $jobid = bin2hex(random_bytes(10));
    $gameserverscript = json_encode(array(
      "Mode" => "GameServer",
      "GameId" => $jobid,
      "Settings" => array(
        "Type" => "Avatar",
        "PlaceId" => (int)$placeid,
        "CreatorId" => 1,
        "GameId" => $jobid,
        "MachineAddress" => "http://limrev.one",
        "GsmInterval" => 5,
        "MaxPlayers" => 12,
        "MaxGameInstances" => 50,
        "ApiKey" => "",
        "PreferredPlayerCapacity" => 30,
        "DataCenterId" => "9923",
        "PlaceVisitAccessKey" => "",
        "UniverseId" => (int)$gameid,
        "PlaceFetchUrl" => "http://limrev.one/asset/?id=" . $placeid,
        "MatchmakingContextId" => 1,
        "CreatorId" => 1,
        "CreatorType" => "User",
        "PlaceVersion" => 1,
        "BaseUrl" => "limrev.one",
        "JobId" => "Test",
        "script" => "print('Initializing NetworkServer.')",
        "PreferredPort" => $port
      ),
      "Arguments" => []
    ));
    $jobid = $this->OpenJob(false, $RCCport, $gameserverscript, 999999999, $jobid);
    $query = "INSERT INTO `jobs`(`jobid`, `placeid`, `rccport`, `port`) VALUES (:jid, :pid, :rccport, :port)";
    $jobadd = $db->prepare($query);
    $jobadd->execute(['jid' => $jobid, 'pid' => $placeid, 'rccport' => $RCCport, 'port' => $port]);

    return $jobid;
  }

  public function CloseServerFromRccPort($port = 0)
  {
    $command = "wmic process where \"commandline like 'C:\\\\Soulfull\\\\2018\\\\RCC\\\\RCCService.exe  -Console -Start {$port}'\" get ProcessId";
    exec($command, $output, $return_var);
    $pid = null;
    if ($return_var == 0 && isset($output[1])) {
      $pid = trim($output[1]);
    }
    if ($pid) {
      $taskkillCommand = 'taskkill /PID ' . $pid . ' /F';
      exec($taskkillCommand, $killOutput, $killReturnVar);
      if ($killReturnVar == 0) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function JobExistsForPlace($placeid = 1818, $novipserver = false, $noteamtest = false)
  {
    global $db;
    $placeid = (int)$placeid;

    if ($novipserver == true) {
      $novipserver = 1;
    } else {
      $novipserver = 0;
    }

    if ($noteamtest == true) {
      $noteamtest = 1;
    } else {
      $noteamtest = 0;
    }

    $query = "SELECT * FROM jobs WHERE placeid=:pid";
    $getall = $db->prepare($query);
    $getall->execute(['pid' => $placeid]);
    $results = $getall->fetch(PDO::FETCH_ASSOC);

    if (empty($results)) {
      return false;
    }

    if ($results) {
      return $results;
    } else {
      return false;
    }
  }

  public function JobIdExistsForPlace($placeid = 1818, $jobid = "", $novipserver = false, $noteamtest = false)
  {
    global $db;
    $placeid = (int)$placeid;

    if ($novipserver == true) {
      $novipserver = 1;
    } else {
      $novipserver = 0;
    }

    if ($noteamtest == true) {
      $noteamtest = 1;
    } else {
      $noteamtest = 0;
    }

    $query = "SELECT * FROM jobs WHERE placeid=:pid AND jobid=:jid";
    $getall = $db->prepare($query);
    $getall->execute(['pid' => $placeid, 'jid' => $jobid]);
    $results = $getall->fetch(PDO::FETCH_ASSOC);

    if (empty($results)) {
      return false;
    }

    if ($results) {
      return $results;
    } else {
      return false;
    }
  }

  public function sign($privatekey, $yodata)
  {
    openssl_sign($yodata, $newdata, $privatekey, OPENSSL_ALGO_SHA1);
    return $newdata;
  }

  public function renderGame($placeid, $x, $y, $form, $needstorerender)
  {
    global $site;
    global $arbiter;
    global $url;
    global $year;
    $place = $site->getPlace($placeid);
    if (isset($place)) {
      $RCCport = $this->portRoll(5879, 6078);
      $thing = @$arbiter->GetServerPort($year);

      if ($thing == null) { //The arbiter is DEAD
        //echo "Deadbirter";
        http_response_code(500);
        return null;
      }

      if ($thing->port < 0) {
        $arbiter->StartRCC($RCCport, $year);
      } else {
        $RCCport = $thing->port;
      }

      $ownapi = $arbiter->GetOwnAPI($RCCport);
      //assetUrl, fileExtension, x, y, baseUrl
      $rep = @$ownapi->ExecuteThumbnailJob2018("Place", ["rbxassetid://" . $placeid, $form, $x, $y, "http://" . $url]);
      if (isset($rep)) {
        $png = @base64_decode($rep[0]);
        if (isset($png)) {
          return $png;
        } else {
          //echo "Failed to decode png";
          http_response_code(500);
        }
      } else {
        //echo "No response from job";
        http_response_code(500);
        return null;
      }
    } else {
      http_response_code(400);
    }
    return null;
  }

  public function getAsset($id, $version)
  {
    global $site;
    global $user;
    global $loggedin;

    file_put_contents("C:/wamp64/www/configuration/thing.txt", json_encode(getallheaders()));

    if (file_exists("C:/wamp64/www/configuration/Assets/" . $id)) {
      $place = $site->getPlace($id);

      if ($place) {
        $candothething = false;

        if (isset($user) && isset($loggedin)) {
          if ($user['id'] == $place['creatorId']) {
            $candothething = true;
          }
        }

        if (@getallheaders()["accesskey"] == "SoulfullTesting2") {
          $candothething = true;
        }

        if ($candothething) {
          return file_get_contents("C:/wamp64/www/configuration/Assets/" . $id);
        }
      } else {
        return file_get_contents("C:/wamp64/www/configuration/Assets/" . $id);
      }
    } else {
      if (isset($version)) {
        $version = '&version=' . $version;
        //header('Location: https://assetdelivery.roblox.com/v1/asset?id='.$id.$version);
        return @file_get_contents("http://localhost:8080/asset?id=" . $id); //true;
      } else {
        header('Location: https://assetdelivery.roblox.com/v1/asset?id=' . $id);
        return true;
      }
    }
  }
}
