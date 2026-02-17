


<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, false);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
        <!-- MachineID: WEB176 -->
        <title>Roblox Studio</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="Content-Language" content="en-us"/>
		<meta name="author" content="ROBLOX Corporation"/>
		<meta name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine."/>
		<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
		<link href="http://web.archive.org/web/20160216080343im_/http://images.rbxcdn.com/7aee41db80c1071f60377c3575a0ed87.ico" rel="icon"/>
		
        
<link rel="stylesheet" href="/CSS/rbxcdn/Studio/LeanBaseStyle.css"/>

		
<link rel="stylesheet" href="/CSS/rbxcdn/Studio/Plugins.css"/>

		

<script type="text/javascript">

var _gaq = _gaq || [];

    window.GoogleAnalyticsDisableRoblox2 = true;
_gaq.push(['b._setAccount', 'UA-486632-1']);
_gaq.push(['b._setCampSourceKey', 'rbx_source']);
_gaq.push(['b._setCampMediumKey', 'rbx_medium']);
_gaq.push(['b._setCampContentKey', 'rbx_campaign']);

    _gaq.push(['b._setDomainName', '<?php echo $url; ?>']);

    _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
        _gaq.push(['b._setPageGroup', 1, 'RollerCoaster']);
        
            var eventsArr = ['b._setCustomVar', 2, 'FirstTimeVisitor', 'true', 3];
            _gaq.push(eventsArr);
            $(function() {
                if(GoogleAnalyticsEvents) {
                    GoogleAnalyticsEvents.Log(eventsArr);
                }
            });
        
_gaq.push(['b._trackPageview']);


_gaq.push(['c._setAccount', 'UA-26810151-2']);
    _gaq.push(['c._setDomainName', '<?php echo $url; ?>']);
            _gaq.push(['c._setPageGroup', 1, 'RollerCoaster']);

(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'http://ssl' : '//www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>

 <script type="text/javascript" src="/js/jquery/jquery-1.11.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="/js/jquery/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type="text/javascript" src="/js/Microsoft/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>

		<script type="text/javascript" src="/js/rbxcdn/5788dfcd1d1e7cad2baa4e76eecbdf2e.js"></script>

        <script type='text/javascript'>Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'http://js.rbxcdn.com/943dbead6327ef7e601925fc45ffbeb0.js';Roblox.config.paths['Pages.CatalogShared'] = 'http://js.rbxcdn.com/496e8f05b3aabfcd72a147ddb49aaf1e.js';Roblox.config.paths['Widgets.AvatarImage'] = 'http://js.rbxcdn.com/6bac93e9bb6716f32f09db749cec330b.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'http://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'http://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'http://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script>

		<script type="text/javascript" src="/js/rbxcdn/6806a0713b316cbaf72fa903347e6f5d.js"></script>

        <script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>        <script type="text/javascript">
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
</script>

<script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
		<input name="__RequestVerificationToken" type="hidden" value="T0qmwfyfRS5trJqrowZHg96eXCwHmJRI-92GSUcmGhmn3LXX7SAzeidtZ3s3Jl8x4IFd8DQk2WSC44OxqiinRuaFKO81"/>
		<script type="text/javascript">
			Roblox.XsrfToken.setToken('UXeRfRGQsKZu');
		</script>
        	</head>
	<body>
 
		
<div class="manage-header-wrap">
    <div class="manage-header">
        <h2>Plugins</h2>
        <div class="button-bar">
            <a href="http://web.archive.org/web/20160216080343/http://www.roblox.com/develop/library?CatalogContext=2&amp;SortType=0&amp;SortAggregation=3&amp;SortCurrency=0&amp;Category=7" class="btn-medium btn-neutral" id="find-plugins">Find Plugins</a>
        </div>
    </div>
    <div class="plugins">
        <div class="divider-bottom error-bar">
            <span class="status-confirm"></span>
        </div>
        <div id="assetId" class="divider-bottom plugin" data-thumbnail-url="http://www.roblox.com/studio/plugins/info">
            <div class="plugin-controls">
                <div class="update-button-wrapper">
                    <span class="no-updates">Up to date</span>
                    <span class="updates">New version available</span>
                    <a class="btn-small btn-neutral update-button">Update</a>
                </div>
                <div class="plugin-wrapper">
                    <a class="switch inactive" href="#">Active</a>
                    <a class="close-x" href="" alt="Uninstall"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">


    $(function () {
        Roblox.Plugins.Manage.Resources = {
            //<sl:translate>
            removePluginTitle: "Remove Plugin",
            removePluginText: "Are you sure you want to remove {0} from Roblox Studio?",
            accept: "OK",
            decline: "Cancel",
            pluginRemoveSuccessText: "The plugin was removed successfully.",
            pluginRemoveFailureText: "The plugin could not be removed successfully.",
            updateText: "Update",
            updatingText: "Updating...",
            updatedText: "Updated",
            noPluginsFoundText: "There are no plugins installed. Please use <a href='http://web.archive.org/web/20160216080343/http://www.roblox.com/develop/library?CatalogContext=2&amp;SortType=0&amp;SortAggregation=3&amp;SortCurrency=0&amp;LegendExpanded=true&amp;Category=7'>Find Plugins</a> to browse plugins from the library."
            //</sl:translate>
        };

        Roblox.Plugins.Manage.init();
    });
</script>



    <script type="text/javascript">function urchinTracker() {}</script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href id="roblox-confirm-btn"><span></span></a>
            <a href id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>  
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};
        
        //<sl:translate>
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>
		
	</body>
</html>