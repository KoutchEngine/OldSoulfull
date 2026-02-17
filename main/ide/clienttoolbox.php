<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    
<link rel="stylesheet" href="/CSS/rbxcdn/Toolbox.css"/>


    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

    <script type="text/javascript" src="/js/rbxcdn/Toolbox.js"></script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/api/item.ashx'] = 'http://www.<?php echo $url; ?>/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'http://assetgame.<?php echo $url; ?>/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'http://www.<?php echo $url; ?>/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'http://www.<?php echo $url; ?>/client-status';
Roblox.Endpoints.Urls['/game/'] = 'http://assetgame.<?php echo $url; ?>/game/';
Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'http://www.<?php echo $url; ?>/game-auth/getauthticket';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'http://assetgame.<?php echo $url; ?>/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'http://assetgame.<?php echo $url; ?>/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'http://assetgame.<?php echo $url; ?>/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'http://assetgame.<?php echo $url; ?>/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'http://assetgame.<?php echo $url; ?>/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'http://assetgame.<?php echo $url; ?>/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'http://assetgame.<?php echo $url; ?>/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'http://www.<?php echo $url; ?>/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'http://www.<?php echo $url; ?>/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'http://www.<?php echo $url; ?>/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'http://www.<?php echo $url; ?>/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'http://www.<?php echo $url; ?>/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'http://www.<?php echo $url; ?>/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'http://www.<?php echo $url; ?>/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'http://www.<?php echo $url; ?>/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'http://www.<?php echo $url; ?>/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'http://search.<?php echo $url; ?>/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'http://search.<?php echo $url; ?>/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'http://search.<?php echo $url; ?>/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'http://search.<?php echo $url; ?>/catalog/lists.aspx';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'http://assetgame.<?php echo $url; ?>/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'http://assetgame.<?php echo $url; ?>/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'http://assetgame.<?php echo $url; ?>/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'http://assetgame.<?php echo $url; ?>/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'http://assetgame.<?php echo $url; ?>/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'http://assetgame.<?php echo $url; ?>/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'http://assetgame.<?php echo $url; ?>/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'http://www.<?php echo $url; ?>/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'http://www.<?php echo $url; ?>/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'http://www.<?php echo $url; ?>/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'http://www.<?php echo $url; ?>/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'http://www.<?php echo $url; ?>/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'http://www.<?php echo $url; ?>/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'http://www.<?php echo $url; ?>/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'http://www.<?php echo $url; ?>/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'http://www.<?php echo $url; ?>/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'http://www.<?php echo $url; ?>/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'http://www.<?php echo $url; ?>/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'http://www.<?php echo $url; ?>/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'http://www.<?php echo $url; ?>/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'http://www.<?php echo $url; ?>/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'http://www.<?php echo $url; ?>/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'http://www.<?php echo $url; ?>/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'http://www.<?php echo $url; ?>/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'http://www.<?php echo $url; ?>/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'http://www.<?php echo $url; ?>/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'http://www.<?php echo $url; ?>/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'http://www.<?php echo $url; ?>/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'http://www.<?php echo $url; ?>/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'http://www.<?php echo $url; ?>/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'http://www.<?php echo $url; ?>/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'http://www.<?php echo $url; ?>/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'http://www.<?php echo $url; ?>/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'http://www.<?php echo $url; ?>/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'http://www.<?php echo $url; ?>/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'http://www.<?php echo $url; ?>/api/friends/declinefriendrequest';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/sets/get-by-creator'] = 'http://www.<?php echo $url; ?>/sets/get-by-creator';
Roblox.Endpoints.Urls['/sets/get-roblox-sets'] = 'http://www.<?php echo $url; ?>/sets/get-roblox-sets';
Roblox.Endpoints.Urls['/sets/get-subscribed'] = 'http://www.<?php echo $url; ?>/sets/get-subscribed';
Roblox.Endpoints.Urls['/ide/toolbox/items'] = 'http://www.<?php echo $url; ?>/ide/toolbox/items';
Roblox.Endpoints.Urls['/voting/studio/vote'] = 'http://www.<?php echo $url; ?>/voting/studio/vote';
Roblox.Endpoints.Urls['/voting/studio/unvote'] = 'http://www.<?php echo $url; ?>/voting/studio/unvote';
Roblox.Endpoints.Urls['/ide/insertasset'] = 'http://www.<?php echo $url; ?>/ide/insertasset';
Roblox.Endpoints.Urls['/groups/can-manage-games'] = 'http://www.<?php echo $url; ?>/groups/can-manage-games';
</script>

        <script type="text/javascript">

        var _gaq = _gaq || [];

        
		_gaq.push(['_setAccount', 'UA-43420590-3']);
		_gaq.push(['_setDomainName', '<?php echo $url; ?>']);
       (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'http://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
            <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("//ecsv2.<?= $url ?>/www/e.png",
                    "//ecsv2.<?= $url ?>/www/e.png",
                    "//ecsv2.<?= $url ?>/pe?t=studio",
                    "//ecsv2.<?= $url ?>/pe?t=diagnostic");
            }
        </script>

</head>
<body ng-app="clientToolbox">
    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.ClientToolboxLinks =
        {
            HeaderTemplateLink: "toolbox-header",
            SubnavTemplateLink: "toolbox-subnav",
            PaginationTemplateLink: "toolbox-pagination",
            AssetsTemplateLink: "toolbox-assets",
            ThumbnailTemplateLink: "toolbox-thumbnail",
            FooterTemplateLink: "toolbox-footer",
            GetSetsByCreatorLink: "/sets/get-by-creator",
            GetRobloxSetsLink: "/sets/get-roblox-sets",
            GetSubscribedSetsLink: "/sets/get-subscribed",
            GetAssetsLink: "/ide/toolbox/items",
            GetSetItemsLink: "/sets/0/items",
            VoteStudioLink: "/voting/studio/vote",
            UnvoteStudioLink: "/voting/studio/unvote",
            InsertAssetLink: "/ide/insertasset",
            GetGroupsCanManageGamesInLink: "/groups/can-manage-games"
        };
        Roblox.AssetType = {
            "10": "FreeModels",
            "13": "FreeDecals",
                "40": "FreeMeshes",
            "3": "FreeAudio"
        };
        Roblox.ClientToolboxModel = {
            // type cast to boolean for javascript
            IsUserAuthenticated: <?php echo $loggedin2; ?>,
            ContentUrl: "http://assetgame.<?= $url ?>/asset/",
            UserId: "<?php echo $loggeduserid; ?>",
            ShowGroupCategories: true,
        };
        Roblox.jsConsoleEnabled = false;
        Roblox.AreMeshesEnabled = true;
        Roblox.EnableNewToolboxSearch = true;
        Roblox.AreAudioShown = true;
    </script>
    <input name="__RequestVerificationToken" type="hidden" value="ih4CsjhsJJoAXkDOZzM0QGI7i5Qv8dITfldAx5dGjfXgJ7vqld9GMGIWNJ2DY8F8wALcDhqpYFJ0jj2hu8B7knL57Zs1"/>

<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500" data-ga-logging-percent="10">
</div>
    <div roblox-toolbox>
        <div roblox-toolbox-header class="client-toolbox-header">
        </div>
            <div ng-controller="RobloxReferralLink" ng-show="showReferralLinks()" class="client-toolbox-referral-links">
                Try searching for:
                <a href ng-click="refer('NPC')">NPC</a>
                <a href ng-click="refer('Vehicle')">Vehicle</a>
                <a href ng-click="refer('Weapon')">Weapon</a>
                <a href ng-click="refer('Building')">Building</a>
                <a href ng-click="refer('Light')">Light</a>
            </div>
        <div roblox-toolbox-subnav class="client-toolbox-subnav">

        </div>
        <div roblox-toolbox-assets class="client-toolbox-content">
        </div>

        <div roblox-toolbox-pagination class="client-toolbox-subnav">

        </div>

        <div roblox-toolbox-footer class="client-toolbox-footer">

        </div>
    </div>
    
    
    
    
    
    
    
    
    <div ng-modules="pageTemplateApp">
        <script type="text/javascript" src="/js/rbxcdn/Toolbox2.js"></script>
    </div>
</body>

</html>