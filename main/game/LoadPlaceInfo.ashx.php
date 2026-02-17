<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['PlaceId']))
    {
        $placeId = (int)$_GET['PlaceId'];
        if($site->getPlace($placeId))
        {
            $place = $site->getPlace($placeId);
        } else {
            exit('');
        }
    } else {
        exit('');
    }
?>
-- Loaded by StartGameSharedScript --
pcall(function() game:SetCreatorID(<?php echo $place['creatorId']; ?>, Enum.CreatorType.User) end)

pcall(function() game:GetService("SocialService"):SetFriendUrl("http://assetgame.<?php echo $url; ?>/Game/LuaWebService/HandleSocialRequest.ashx?method=IsFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetBestFriendUrl("http://assetgame.<?php echo $url; ?>/Game/LuaWebService/HandleSocialRequest.ashx?method=IsBestFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupUrl("http://assetgame.<?php echo $url; ?>/Game/LuaWebService/HandleSocialRequest.ashx?method=IsInGroup&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRankUrl("http://assetgame.<?php echo $url; ?>/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRank&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRoleUrl("http://assetgame.<?php echo $url; ?>/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRole&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("GamePassService"):SetPlayerHasPassUrl("http://assetgame.<?php echo $url; ?>/Game/GamePass/GamePassHandler.ashx?Action=HasPass&UserID=%d&PassID=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetProductInfoUrl("http://api.<?php echo $url; ?>/marketplace/productinfo?assetId=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetDevProductInfoUrl("http://api.<?php echo $url; ?>/marketplace/productDetails?productId=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetPlayerOwnsAssetUrl("http://api.<?php echo $url; ?>/ownership/hasasset?userId=%d&assetId=%d") end)
pcall(function() game:SetPlaceVersion(<?php echo $place['placeVersion']; ?>) end)
pcall(function() game:SetVIPServerOwnerId(0) end)
<?php
$data = "\r\n" . ob_get_clean();
echo "--rbxsig%".base64_encode($roblox->sign($privatekey, $data))."%".$data;
?>