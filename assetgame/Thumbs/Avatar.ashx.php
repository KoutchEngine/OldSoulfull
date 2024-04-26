<?php
    include 'C:/xampp/htdocs/configuration/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php';
    include 'C:/xampp/htdocs/configuration/global.php';
    $x = 100;
    $y = 100;
    $userid = 1;

    if(isset($_GET['x'])) {
        $x = (int)$_GET['x'];
    }

    if(isset($_GET['y'])) {
        $y = (int)$_GET['y'];
    }

    if(isset($_GET['userId']))
    {
        $userid = (int)$_GET['userId'];
    }

    if(file_exists('C:/xampp/htdocs/configuration/Renders/Users/'.$userid.'-fullshot-'.$x.'-'.$y.'.png'))
    {
        $render = file_get_contents('C:/xampp/htdocs/configuration/Renders/Users/'.$userid.'-fullshot-'.$x.'-'.$y.'.png');
    } else {
        if($x < 101 || $y < 101)
        {
            $RCCServiceSoap = new RCCServiceSoap("26.136.77.48", 64989);

            $job = new Job("ThumbnailGenerator");
            $charapp = "https://assetgame.".$url."/v1.1/avatar-fetch?userid=".$userid;

            $scriptfunny = '
            local player = game.Players:CreateLocalPlayer(0)
            player.UserId = '.$userid.'
            player.CharacterAppearance = "'.$charapp.'"

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
            
            player:LoadCharacter()
            return game:GetService("ThumbnailGenerator"):Click("PNG", '.$x.', '.$y.', true)';
            
            $script = new ScriptExecution("Script", $scriptfunny);
            $batchjob = $RCCServiceSoap->BatchJob($job, $script);
            $render = base64_decode($batchjob[0]);

            file_put_contents('C:/xampp/htdocs/configuration/Renders/Users/'.$userid.'-fullshot-'.$x.'-'.$y.'.png', $render);
        } else {
            exit();
        }
    }

    echo $render;
?>