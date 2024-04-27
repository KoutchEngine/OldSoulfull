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
            if (substr(php_uname(), 0, 7) == "Windows" && !$disablepopen){
                popen("start /B ". $cmd, "r"); 
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
                $roblox->execInBackground('start "" "C:\everything soulfull\clients\2016\RCC\RCCService.exe" -Console -Start -verbose '.$port, "r");
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
                $script = new ScriptExecution("Gameserver", '
                local port = '.$port.'
                local placeId = '.$placeid.'
                local url = "http://www.'.$url.'"
                local baseUrl = "'.$url.'"
                local assetGameUrl = "http://assetgame.'.$url.'"
                local matchmakingContextId = '.$matchmakingContextId.'
                local universeId = '.$universeid.'
                
------------------- UTILITY FUNCTIONS --------------------------


function waitForChild(parent, childName)
	while true do
		local child = parent:findFirstChild(childName)
		if child then
			return child
		end
		parent.ChildAdded:wait()
	end
end

-----------------------------------END UTILITY FUNCTIONS -------------------------

-----------------------------------"CUSTOM" SHARED CODE----------------------------------

pcall(function() settings().Network.UseInstancePacketCache = true end)
pcall(function() settings().Network.UsePhysicsPacketCache = true end)
--pcall(function() settings()["Task Scheduler"].PriorityMethod = Enum.PriorityMethod.FIFO end)
pcall(function() settings()["Task Scheduler"].PriorityMethod = Enum.PriorityMethod.AccumulatedError end)

--settings().Network.PhysicsSend = 1 -- 1==RoundRobin
--settings().Network.PhysicsSend = Enum.PhysicsSendMethod.ErrorComputation2
settings().Network.PhysicsSend = Enum.PhysicsSendMethod.TopNErrors
settings().Network.ExperimentalPhysicsEnabled = true
settings().Network.WaitingForCharacterLogRate = 100
pcall(function() settings().Diagnostics:LegacyScriptMode() end)

-----------------------------------START GAME SHARED SCRIPT------------------------------

local assetId = placeId -- might be able to remove this now

local scriptContext = game:GetService("ScriptContext")
pcall(function() scriptContext:AddStarterScript(37801172) end)
scriptContext.ScriptsDisabled = true
game:SetPlaceID(assetId, false)
pcall(function () if universeId ~= nil then game:SetUniverseId(universeId) end end)
game:GetService("ChangeHistoryService"):SetEnabled(false)

-- establish this peer as the Server
local ns = game:GetService("NetworkServer")
-- Detect cloud edit mode by checking for the dedicated cloud edit matchmaking context
local isCloudEdit = matchmakingContextId == 3
if isCloudEdit then
	print("Configuring as cloud edit server!")
	game:SetServerSaveUrl(url .. "/ide/publish/UploadFromCloudEdit")	
	ns:ConfigureAsCloudEditServer()
end

if matchmakingContextId == 4 then
	print("Configuring as team test server!")
	local success, message = pcall(function() ns:ConfigureAsTeamTestServer() end)
	if not success then
		print("Failed to start team test server: ", message)
	end
end

if url~=nil then
    local apiProxyUrl = "https://api." .. baseUrl -- baseUrl is really the domain   

	pcall(function() game:GetService("Players"):SetAbuseReportUrl(url .. "/AbuseReport/InGameChatHandler.ashx") end)
	pcall(function() game:GetService("ScriptInformationProvider"):SetAssetUrl(url .. "/Asset/") end)
	pcall(function() game:GetService("ContentProvider"):SetBaseUrl(url .. "/") end)
	pcall(function() game:GetService("Players"):SetChatFilterUrl(url .. "/Game/ChatFilter.ashx") end)

	game:GetService("BadgeService"):SetPlaceId(placeId)

	game:GetService("BadgeService"):SetAwardBadgeUrl(apiProxyUrl.."/assets/award-badge?userId=%d&badgeId=%d&placeId=%d")
    game:GetService("BadgeService"):SetHasBadgeUrl(assetGameUrl .. "/Game/Badge/HasBadge.ashx?UserID=%d&BadgeID=%d")
	game:GetService("BadgeService"):SetIsBadgeDisabledUrl(assetGameUrl .. "/Game/Badge/IsBadgeDisabled.ashx?BadgeID=%d&PlaceID=%d")
    game:GetService("FriendService"):SetMakeFriendUrl(assetGameUrl .. "/Game/CreateFriend?firstUserId=%d&secondUserId=%d")
	game:GetService("FriendService"):SetBreakFriendUrl(assetGameUrl .. "/Game/BreakFriend?firstUserId=%d&secondUserId=%d")
	game:GetService("FriendService"):SetGetFriendsUrl(assetGameUrl .. "/Game/AreFriends?userId=%d")

    game:GetService("BadgeService"):SetIsBadgeLegalUrl("")
	game:GetService("InsertService"):SetBaseSetsUrl(url .. "/Game/Tools/InsertAsset.ashx?nsets=10&type=base")
	game:GetService("InsertService"):SetUserSetsUrl(url .. "/Game/Tools/InsertAsset.ashx?nsets=20&type=user&userid=%d")
	game:GetService("InsertService"):SetCollectionUrl(url .. "/Game/Tools/InsertAsset.ashx?sid=%d")
	game:GetService("InsertService"):SetAssetUrl(url .. "/Asset/?id=%d")
	game:GetService("InsertService"):SetAssetVersionUrl(url .. "/Asset/?assetversionid=%d")
	
	pcall(function() loadfile(url .. "/Game/LoadPlaceInfo.ashx?PlaceId=" .. placeId)() end)
	
	-- pcall(function() 
	--			if access then
	--				loadfile(url .. "/Game/PlaceSpecificScript.ashx?PlaceId=" .. placeId .. "&" .. access)()
	--			end
	--		end)
end

pcall(function() game:GetService("NetworkServer"):SetIsPlayerAuthenticationRequired(true) end)
settings().Diagnostics.LuaRamLimit = 0
--settings().Network:SetThroughputSensitivity(0.08, 0.01)
--settings().Network.SendRate = 35
--settings().Network.PhysicsSend = 0  -- 1==RoundRobin


game:GetService("Players").PlayerAdded:connect(function(player)
	print("Player " .. player.userId .. " added")

    if assetGameUrl and access and placeId and player and player.userId then
		local didTeleportIn = "False"
		if player.TeleportedIn then didTeleportIn = "True" end

		game:HttpGet(assetGameUrl .. "/Game/ClientPresence.ashx?action=connect&PlaceID=" .. placeId .. "&UserID=" .. player.userId, false)
        if not isCloudEdit then
            game:HttpPost(assetGameUrl .. "/Game/PlaceVisit.ashx?UserID=" .. player.userId .. "&AssociatedPlaceID=" .. placeId .. "&placeVisitAccessKey=" .. placeVisitAccessKey .. "&IsTeleport=" .. didTeleportIn, false)
        end
	end
end)

game:GetService("Players").PlayerRemoving:connect(function(player)
	print("Player " .. player.userId .. " leaving")

    local isTeleportingOut = "False"
	if player.Teleported then isTeleportingOut = "True" end

    local plrcount = 0
    for i,v in pairs(game.Players:GetPlayers()) do plrcount = plrcount + 1 end
    game:HttpGet(assetGameUrl .. "/Game/RCCUpdate.php?job=game.JobId&players=plrcount&port=port", false)

	if assetGameUrl and access and placeId and player and player.userId then
		game:HttpGet(assetGameUrl .. "/Game/ClientPresence.ashx?action=disconnect&PlaceID=" .. placeId .. "&UserID=" .. player.userId .. "&IsTeleport=" .. isTeleportingOut, false)
	end
end)

if placeId~=nil and url~=nil then
	-- yield so that file load happens in the heartbeat thread
	wait()
	
	-- load the game
	game:Load(assetGameUrl .. "/asset/?id=" .. placeId)
end

-- Now start the connection
ns:Start(port) 


scriptContext:SetTimeout(10)
scriptContext.ScriptsDisabled = false



------------------------------END START GAME SHARED SCRIPT--------------------------



-- StartGame -- 
if not isCloudEdit then game:GetService("RunService"):Run() end');
                $rcc = $soap->OpenJobEx($job, $script);
                $soap->RenewLease($jobid, 999999999);
            }
        }

        public function sign($privatekey, $yodata)
        {
            openssl_sign($yodata, $newdata, $privatekey, OPENSSL_ALGO_SHA1);
            return $newdata;
        }
    }
?>