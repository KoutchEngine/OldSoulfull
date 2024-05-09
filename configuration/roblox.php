<?php
    // Things you can edit to change stuff
    $disablepopen = false; // Setting to true will stop execInBackground from using popen, and instead exec.
    $disableexec = false; // Setting to true will stop execInBackground from using exec.

    // Things you can also edit HOWEVER, beware, as this can potientially break soulfull's backend.
    $privatekey = file_get_contents('C:/xampp/htdocs/configuration/PrivateKeys_VERYVERYPRIVATE/PrivateKey.pem');
    
    // For here, it's advised not to touch, unless you know what you're doing.
    class Roblox {
        public function getAsset($id)
        {
            if(file_exists('C:/xampp/htdocs/configuration/Assets/'. $id))
            {
                return file_get_contents('C:/xampp/htdocs/configuration/Assets/'. $id);
            } else {
                header('Location: https://assetdelivery.roblox.com/v1/asset?id='.$id);
            }
        }

        public function execInBackground($cmd) {  
            global $disableexec;
            global $disablepopen;
            if (substr(php_uname(), 0, 7) == "Windows" && !$disablepopen){
                $funny = popen("start /B ". $cmd, "r"); 
                return $funny;
            } else {
                if(!$disableexec)
                {
                    exec($cmd . " > /dev/null &");
                } 
            } 
        } 

        public function placeStart($placeid, $port, $jobid, $isCloudEdit, $isTeamTest, $isVipServer)
        {
            global $site;
            global $roblox; // roblox calls roblox that called roblox that then calls roblox
            global $url;
        
            if($site->getPlace($placeid))
            {
                $place = $site->getPlace($placeid);
                $universeid = $place['gameId'];
                $roblox->execInBackground('"" "C:\everything soulfull\clients\2016\RCC\RCCService.exe" -Console -Start -verbose '.$port, "r");
                include 'C:/xampp/htdocs/configuration/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php';
                $soap = new RCCServiceSoap('26.136.77.48', $port);
                $job = new Job($jobid);
                $matchmakingContextId = 1;
                if($isCloudEdit)
                {
                    $matchmakingContextId = 3;
                } else if ($isTeamTest)
                {
                    $matchmakingContextId = 4;
                }
                $gameserverscript = file_get_contents('http://assetgame.s16rev.xyz/game/gameserver.ashx');
                $gameserverscript = str_replace("%port%", $port, $gameserverscript);
                $gameserverscript = str_replace("%pid%", $placeid, $gameserverscript);
                $gameserverscript = str_replace("%url%", $url, $gameserverscript);
                $gameserverscript = str_replace("%matchmakingContextId%", $matchmakingContextId, $gameserverscript);
                $gameserverscript = str_replace("%uid%", $universeid, $gameserverscript);
                
                $script = new ScriptExecution("Gameserver", $gameserverscript);
                $rcc = $soap->OpenJobEx($job, $script);
                $soap->RenewLease($jobid, 999999999);
            }
        }

        public function sign($privatekey, $yodata)
        {
            openssl_sign($yodata, $newdata, $privatekey, OPENSSL_ALGO_SHA1);
            return $newdata;
        }

        public function renderGame($placeid, $x, $y)
        {
            global $site;
            global $url;
            global $roblox;

            include 'C:/xampp/htdocs/configuration/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php';

    if(file_exists('C:/xampp/htdocs/configuration/Renders/Games/'.$placeid.'-'.$x.'-'.$y.'.png'))
    {
        return file_get_contents('C:/xampp/htdocs/configuration/Renders/Games/'.$placeid.'-'.$x.'-'.$y.'.png');
    } else {
            $port = rand(1337, 53640);
            $thercc = $roblox->execInBackground('"" "C:\everything soulfull\clients\2016\RCC\RCCService.exe" -Console -Start '.$port, "r");
            $RCCServiceSoap = new RCCServiceSoap("26.136.77.48", $port);

            $job = new Job("ThumbnailGenerator");

            $scriptfunny = '

            local placeId = '.$placeid.'
            local assetGameUrl = "https://assetgame.'.$url.'"

            local scriptContext = game:GetService("ScriptContext")

            pcall(function() settings().Network.UseInstancePacketCache = true end)
            pcall(function() settings().Network.UsePhysicsPacketCache = true end)
            pcall(function() settings()["Task Scheduler"].PriorityMethod = Enum.PriorityMethod.AccumulatedError end)
            
            settings().Network.PhysicsSend = Enum.PhysicsSendMethod.TopNErrors
            settings().Network.ExperimentalPhysicsEnabled = true
            settings().Network.WaitingForCharacterLogRate = 100
            pcall(function() settings().Diagnostics:LegacyScriptMode() end)
            
            settings().Diagnostics.LuaRamLimit = 0
            
            scriptContext.ScriptsDisabled = true
            
            game:Load(assetGameUrl .. "/asset/?id=" .. placeId)

            return game:GetService("ThumbnailGenerator"):Click("PNG", '.$x.', '.$y.', false)';
            
            $script = new ScriptExecution("Script", $scriptfunny);
            $batchjob = $RCCServiceSoap->BatchJob($job, $script);
            $render = base64_decode($batchjob[0]);

            file_put_contents('C:/xampp/htdocs/configuration/Renders/Games/'.$placeid.'-'.$x.'-'.$y.'.png', $render);
            pclose($thercc);

            return $render;
    }
        }
    }
?>