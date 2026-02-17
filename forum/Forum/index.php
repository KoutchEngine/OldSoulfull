
<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, false);
    $site->invitekey();

    $forums = $site->getAllForums();
?>

<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<!-- MachineID: WEB411 -->
<head id="ctl00_Head1">
<title>
	Forum - ROBLOX
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    
<link rel="stylesheet" href=""/>

    <?php $site->robloxHtml("HTMLStarterPack_MainCSS");?><title>ROBLOX Forum</title>
    <link rel="stylesheet" href="//forum.<?= $url ?>/Forum/skins/default/style/default.css" type="text/css"/><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta http-equiv="Content-Language" content="en-us"/><meta name="author" content="ROBLOX Corporation"/><meta id="ctl00_metadescription" name="description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/><meta id="ctl00_metakeywords" name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="text/javascript" src="//www.<?= $url ?>/js/jquery/jquery-1.11.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>

<script type="text/javascript" src="//www.<?= $url ?>/js/jquery/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link href="//images.<?= $url ?>/9c0e562131139fc909c6fbb3d691c249.ico.gzip" rel="icon">

        <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.AdsHelper = Roblox.AdsHelper || {};
        Roblox.AdsLibrary = Roblox.AdsLibrary || {};

        Roblox.AdsHelper.toggleAdsSlot = function (slotId, GPTRandomSlotIdentifier) {
        var gutterAdsEnabled = false;
        if (gutterAdsEnabled) {
            googletag.display(GPTRandomSlotIdentifier);
            return;
        }

        if (typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
            var slotElm = $("#"+slotId);
            if (slotElm.is(":visible")) {
                googletag.display(GPTRandomSlotIdentifier);
            }else {
                var adParam = Roblox.AdsLibrary.adsParameters[slotId];
                if (adParam) {
                    adParam.template = slotElm.html();
                    slotElm.empty();
                }
            }
        }
        }
        </script><script type="text/javascript">
        $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
        });
        </script><script type="text/javascript" src="//js.<?= $url ?>/16994b0cbe9c1d943e0de0fade860343.js"></script>
        
        
        <link rel="canonical" href="https://forum.<?= $url ?>/forum/"/>
            <script type="text/javascript">
                var _gaq = _gaq || [];
                window.GoogleAnalyticsDisableRoblox2 = true;
                
                _gaq.push(['b._setAccount', 'UA-486632-1']);
                _gaq.push(['b._setCampSourceKey', 'rbx_source']);
                _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
                _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

                _gaq.push(['b._setDomainName', '<?= $url ?>']);
                _gaq.push(['b._setCustomVar', 1, 'Visitor', '%memberstat%', 2]);
                _gaq.push(['b._setPageGroup', 1, '%page%']);
                _gaq.push(['b._trackPageview']);

                _gaq.push(['c._setAccount', 'UA-26810151-2']);
                _gaq.push(['c._setSampleRate', '1']);
                _gaq.push(['c._setDomainName', '<?= $url ?>']);
                _gaq.push(['c._setPageGroup', 1, '%page%']);

                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
            </script>

        <script type="text/javascript" src="//js.<?= $url ?>/74c43ff2a06ffb2f37a6e8db03fe8fe7.js"></script>   

                    <script type="text/javascript">
                    if (Roblox && Roblox.EventStream) {
                        Roblox.EventStream.Init("//ecsv2.<?= $url ?>/www/e.png",
                            "//ecsv2.<?= $url ?>/www/e.png",
                            "//ecsv2.<?= $url ?>/pe?t=studio",
                            "//ecsv2.<?= $url ?>/pe?t=diagnostic");
                    }
                </script>



        <script type="text/javascript">
            if (Roblox && Roblox.PageHeartbeatEvent) {
                Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
            }
        </script>        <script type="text/javascript">
        if (typeof(Roblox) === "undefined") { Roblox = {}; }
        Roblox.Endpoints = Roblox.Endpoints || {};
        Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
        Roblox.Endpoints.Urls['/api/item.ashx'] = 'http://www.<?= $url ?>/api/item.ashx';
        Roblox.Endpoints.Urls['/asset/'] = 'http://assetgame.<?= $url ?>/asset/';
        Roblox.Endpoints.Urls['/client-status/set'] = 'http://www.<?= $url ?>/client-status/set';
        Roblox.Endpoints.Urls['/client-status'] = 'http://www.<?= $url ?>/client-status';
        Roblox.Endpoints.Urls['/game/'] = 'http://assetgame.<?= $url ?>/game/';
        Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'http://www.<?= $url ?>/game-auth/getauthticket';
        Roblox.Endpoints.Urls['/game/edit.ashx'] = 'http://assetgame.<?= $url ?>/game/edit.ashx';
        Roblox.Endpoints.Urls['/game/getauthticket'] = 'http://assetgame.<?= $url ?>/game/getauthticket';
        Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'http://assetgame.<?= $url ?>/game/placelauncher.ashx';
        Roblox.Endpoints.Urls['/game/preloader'] = 'http://assetgame.<?= $url ?>/game/preloader';
        Roblox.Endpoints.Urls['/game/report-stats'] = 'http://assetgame.<?= $url ?>/game/report-stats';
        Roblox.Endpoints.Urls['/game/report-event'] = 'http://assetgame.<?= $url ?>/game/report-event';
        Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'http://assetgame.<?= $url ?>/game/updateprerollcount';
        Roblox.Endpoints.Urls['/login/default.aspx'] = 'http://www.<?= $url ?>/login/default.aspx';
        Roblox.Endpoints.Urls['/my/character.aspx'] = 'http://www.<?= $url ?>/my/character.aspx';
        Roblox.Endpoints.Urls['/my/money.aspx'] = 'http://www.<?= $url ?>/my/money.aspx';
        Roblox.Endpoints.Urls['/chat/chat'] = 'http://www.<?= $url ?>/chat/chat';
        Roblox.Endpoints.Urls['/presence/users'] = 'http://www.<?= $url ?>/presence/users';
        Roblox.Endpoints.Urls['/presence/user'] = 'http://www.<?= $url ?>/presence/user';
        Roblox.Endpoints.Urls['/friends/list'] = 'http://www.<?= $url ?>/friends/list';
        Roblox.Endpoints.Urls['/navigation/getCount'] = 'http://www.<?= $url ?>/navigation/getCount';
        Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'http://www.<?= $url ?>/catalog/browse.aspx';
        Roblox.Endpoints.Urls['/catalog/html'] = 'http://search.<?= $url ?>/catalog/html';
        Roblox.Endpoints.Urls['/catalog/json'] = 'http://search.<?= $url ?>/catalog/json';
        Roblox.Endpoints.Urls['/catalog/contents'] = 'http://search.<?= $url ?>/catalog/contents';
        Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'http://search.<?= $url ?>/catalog/lists.aspx';
        Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'http://assetgame.<?= $url ?>/asset-hash-thumbnail/image';
        Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'http://assetgame.<?= $url ?>/asset-hash-thumbnail/json';
        Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'http://assetgame.<?= $url ?>/asset-thumbnail-3d/json';
        Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'http://assetgame.<?= $url ?>/asset-thumbnail/image';
        Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'http://assetgame.<?= $url ?>/asset-thumbnail/json';
        Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'http://assetgame.<?= $url ?>/asset-thumbnail/url';
        Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'http://assetgame.<?= $url ?>/asset/request-thumbnail-fix';
        Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'http://www.<?= $url ?>/avatar-thumbnail-3d/json';
        Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'http://www.<?= $url ?>/avatar-thumbnail/image';
        Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'http://www.<?= $url ?>/avatar-thumbnail/json';
        Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'http://www.<?= $url ?>/avatar-thumbnails';
        Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'http://www.<?= $url ?>/avatar/request-thumbnail-fix';
        Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'http://www.<?= $url ?>/bust-thumbnail/json';
        Roblox.Endpoints.Urls['/group-thumbnails'] = 'http://www.<?= $url ?>/group-thumbnails';
        Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'http://www.<?= $url ?>/groups/getprimarygroupinfo.ashx';
        Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'http://www.<?= $url ?>/headshot-thumbnail/json';
        Roblox.Endpoints.Urls['/item-thumbnails'] = 'http://www.<?= $url ?>/item-thumbnails';
        Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'http://www.<?= $url ?>/outfit-thumbnail/json';
        Roblox.Endpoints.Urls['/place-thumbnails'] = 'http://www.<?= $url ?>/place-thumbnails';
        Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'http://www.<?= $url ?>/thumbnail/asset/';
        Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'http://www.<?= $url ?>/thumbnail/avatar-headshot';
        Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'http://www.<?= $url ?>/thumbnail/avatar-headshots';
        Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'http://www.<?= $url ?>/thumbnail/user-avatar';
        Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'http://www.<?= $url ?>/thumbnail/resolve-hash';
        Roblox.Endpoints.Urls['/thumbnail/place'] = 'http://www.<?= $url ?>/thumbnail/place';
        Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'http://www.<?= $url ?>/thumbnail/get-asset-media';
        Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'http://www.<?= $url ?>/thumbnail/remove-asset-media';
        Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'http://www.<?= $url ?>/thumbnail/set-asset-media-sort-order';
        Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'http://www.<?= $url ?>/thumbnail/place-thumbnails';
        Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'http://www.<?= $url ?>/thumbnail/place-thumbnails-partial';
        Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'http://www.<?= $url ?>/thumbnail_holder/g';
        Roblox.Endpoints.Urls['/users/{id}/profile'] = 'http://www.<?= $url ?>/users/{id}/profile';
        Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'http://www.<?= $url ?>/service-workers/push-notifications';
        Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'http://www.<?= $url ?>/notification-stream/notification-stream-data';
        Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'http://www.<?= $url ?>/api/friends/acceptfriendrequest';
        Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'http://www.<?= $url ?>/api/friends/declinefriendrequest';
        Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
        </script>

            <script type="text/javascript">
        if (typeof(Roblox) === "undefined") { Roblox = {}; }
        Roblox.Endpoints = Roblox.Endpoints || {};
        Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
        </script>
</head>
<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="" data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>
<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="8000" data-http-retry-base-timeout="1000">
</div>
    <script type="text/javascript">Roblox.XsrfToken.setToken('8k2w7/8isXmR');</script>
 
    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>
  
<style type="text/css">
    
</style>
<form name="aspnetForm" method="post" action="http://forum.<?= $url ?>/forum/" id="aspnetForm" class="nav-container no-gutter-ads">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="ioH4gpy6LbRsqx01wdDZVg+rH54OBY8ezhYIkIKs+AzlX+mT0hZJHJJS9Spx21tsciWVGv5fhU7H8+SOur8byOKdZFQewrXITxQWqZ17kOm+o0uZhZpuBuXfF5X/4LNnwuKU9Cofe6UaZ5LvBQ105h7jWzkNF922Ij1KUZL1nvSbGZs+MYOhX8vHa3DL7zylbYRzTzrV2lG5fO7yIW1Ded5Jc8B4gHHdHbQwZRS+fWwuPSQu9PFWacZdTRdolL/1gJeA97P+B9vJWoRLxnK7qsOTeU8sxQvJHDa3J6HSPeeDV0bszxEgpLdtMmPfXcwliSA0+jg+9Zcry9t+MDTJnG6zzVP9XsdDmx8qf4DdxGEdbU0CykMJOIDNwCSxET+UNLV4dgDJLJI0I1+Q3Ea1T0I4Hyxw7ZT1pPtKQBTNKe5IrPJ+36TUKVFdr19ijF0igNqeaMy3wU3X49SSlhJ77421+LKr5n0PVf/VwExafhDvESbby3AWaDtlJ5Vp440gmy7utJRqE+A0lL7J91ghwXt2Fmvl+BGuoz+XbN5ejf84dD2OOICMsVNKJuz3HQ3QUiKYGEOSmiTzEIm14WjvMon6Zsn2LRswk/d2Xw0Kj93dVNjl2PDdbZPlPj/POZFiimfM4fhClFGzmuB2J8posx91gtCBMecftprVpk6cEyjWwsy6788kTHoS1lLvF1BR3LjI7icMrR5avrEGsjWn2dMVFXehRNMU5D7hPCyQatteKiFs3YKl8vH4mgLh2vTSIdAjDHPHRtW4vxTf45cPy4JQItU="/>
</div>


<script src="https://web.archive.org/web/20160706005725js_/http://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjax.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys._Application && Sys.Observer)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=uHIkleVeDJf4xS50Krz-yA3kt4iEPLwQOcXDJXuiLb543xmSxgoBWyWb-0CTRrqRXPsCyYHFJoMX6TPqspOUhmvwRxW7JGKByJCuSKPDJkedBK4vZ68d-hQEQYwPVMjKP6tsCULlkgnx_6P0HwSsu1ZPvc01&t=72e85ccd"><\/script>');//]]>
</script>

<script src="//forum.<?= $url ?>/ScriptResource.axd?d=Ew4H8nXm1bNtKPqrSVPmqf3GczSxPjDFwC6YN8ZABbVLugPx_qjKQ2nYYb5HQRArwNjpU0MuN9wSSd8pjOrFHF-fB4Siq6S6xbnRkytzUlK_3zSg8nL9HHn4pg6EJ3SHzQtF_q9KL5pUcJQqkBhCI1_0Sz1r_x43tehXbGepPJC6uhrA-JBhQq8W0o6zKxm63eK_hSIc3mEtZbcFYNc4fHhMQicTMmjUTsBmQqDRwAVHKkfP0" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="D00095AD"/>
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="JlmdnEaBylZ5VUHo7buVGE3ScaJSJDxFwRHTcPWHOr3829vtc0anb58Mxzvt8NDmr1IwIGz/mddTn665bDjy1Buhersw2Qx2dQdVaNo33lvP15VSTIDN07HNMxqI6XvXvIY48Q=="/>
</div>
    <div id="fb-root">
    </div>
    
    
         
    
    
    


    <?= $site->robloxHtml("Navigation"); ?>

<script type="text/javascript">
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>


        <div id="navContent" class="nav-content"><div class="nav-content-inner">
    <div id="MasterContainer">
    <?= $site->robloxHtml("Alerts"); ?>

<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();


    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
        

    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();
        

    });

</script>



        <script type="text/javascript">Roblox.FixedUI.gutterAdsEnabled=false;</script>

        

        <div id="Container">
            
            
        </div>

		
        
        <noscript><div class="alert-info"><h5>Please enable Javascript to use all the features on this site.</h5></div></noscript>
        
        
        
        
        
        
<div id="AdvertisingLeaderboard">
    

<iframe name="Roblox_Forums_Middle_728x90" allowtransparency="true" frameborder="0" height="110" scrolling="no" src="//www.<?= $url ?>/userads/1" width="728" data-js-adtype="iframead"></iframe>

</div>

        
        <div id="BodyWrapper">
            
            <div id="RepositionBody">
                <div id="Body" class="body-width">
                    

	<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
		<tr valign="top">
			
            <!-- left column -->
			<td class="LeftColumn">&nbsp;&nbsp;&nbsp;</td>
			
            <!-- center column -->
			<td id="ctl00_cphRoblox_CenterColumn" width="95%" class="CenterColumn">
				<br>
            	<span id="ctl00_cphRoblox_NavigationMenu2">

<div id="forum-nav" style="text-align: right">
	<a id="ctl00_cphRoblox_NavigationMenu2_ctl00_HomeMenu" class="menuTextLink first" href="/Forum/Default.aspx">Home</a>
	<a id="ctl00_cphRoblox_NavigationMenu2_ctl00_SearchMenu" class="menuTextLink" href="/Forum/Search/default.aspx">Search</a>
	
	
	
	
	
	
	
</div>
</span>
				<br>
				<table cellpadding="0" cellspacing="2" width="100%">
					<tr>
						<td align="left">
							<span class="normalTextSmallBold">Current time: </span><span class="normalTextSmall">Jul 5, 7:57 PM</span>
						</td>
						<td align="right">
						    <span id="ctl00_cphRoblox_SearchRedirect">

<span>
    <span class="normalTextSmallBold">Search Roblox Forums:</span>
    <input name="ctl00$cphRoblox$SearchRedirect$ctl00$SearchText" type="text" maxlength="50" id="ctl00_cphRoblox_SearchRedirect_ctl00_SearchText" class="notranslate" size="20"/>
    <input type="submit" name="ctl00$cphRoblox$SearchRedirect$ctl00$SearchButton" value="Go" id="ctl00_cphRoblox_SearchRedirect_ctl00_SearchButton" class="translate btn-control btn-control-medium forum-btn-control-medium"/>
</span></span>
							
						</td>
					</tr>
				</table>
                <div style="height:7px;"></div>
				<table cellpadding="2" cellspacing="1" border="0" width="100%" class="table">

                <?php
                    foreach($forums as $forum) {
                        $things = $site->getAllForumThings($forum['id']);
                ?>
                    <tr class="table-header forum-table-header">
                        <th class="first" colspan="2">
                            <a id="ctl00_cphRoblox_ForumGroupRepeater1_ctl01_GroupTitle" class="forumTitle" href="/Forum/ShowForumGroup.aspx?ForumGroupID=1">
                                <?= protecc($forum['title']) ?>
                            </a>
                        </th>
                        
                        <th style="width:50px;white-space:nowrap;">
                            &nbsp;&nbsp;Threads&nbsp;&nbsp;
                        </th>
                        
                        <th style="width:50px;white-space:nowrap;">
                            &nbsp;&nbsp;Posts&nbsp;&nbsp;
                        </th>

                        <th style="width:135px;white-space:nowrap;">
                            &nbsp;Last Post&nbsp;
                        </th>
                    </tr>
                
                    <?php foreach($things as $thing) { ?>
                        <tr class="forum-table-row">
                            <td colspan="2" style="width:80%;">
                                <a class="forum-summary" href="/Forum/ShowForum.aspx?ForumID=46">
                                    <div class="forumTitle">
                                        <?= protecc($thing['title']) ?>
                                    </div>
                            
                                    <div>
                                    <?= protecc($thing['descr']) ?>
                                    </div>
                                </a>
                            </td>
                        
                            <td class="forum-centered-cell" align="center">
                                <span class="normalTextSmaller">
                                    1,211,193
                                </span>
                            </td>
                            
                            <td class="forum-centered-cell" align="center">
                                <span class="normalTextSmaller">
                                    7,965,206
                                </span>
                            </td>
                            
                            <td align="center">
                                <a class="last-post" href="/Forum/ShowPost.aspx?PostID=192906741#192906923">
                                    <span class="normalTextSmaller">
                                        <div>
                                            <b>07:54 PM</b>
                                        </div>
                                    </span>
                                    
                                    <span class="normalTextSmaller notranslate">
                                        <div class="notranslate">
                                            skinnyjohnman
                                        </div>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                
                <?php } ?>
            </table>
				<p></p>
			</td>

			<td class="CenterColumn">&nbsp;&nbsp;&nbsp;</td>
			
            <!-- right column -->
			<td id="ctl00_cphRoblox_RightColumn" nowrap="nowrap" width="160" class="RightColumn" style="padding-top:88px;">
			    

<iframe name="Roblox_Forums_Right_160x600" allowtransparency="true" frameborder="0" height="612" scrolling="no" src="//www.<?= $url ?>/userads/2" width="160" data-js-adtype="iframead"></iframe>

			</td>

            <td class="RightColumn">&nbsp;&nbsp;&nbsp;</td>
		</tr>
	</table>


                    <div style="clear:both"></div>
                </div>
            </div>
        </div> 
        </div>
        
            
        <?= $site->robloxHtml("Footer"); ?>



        
        </div></div>
    </div>
    
        <script type="text/javascript">
            function urchinTracker() { };
            GoogleAnalyticsReplaceUrchinWithGAJS = true;
        </script>
    

    </form>
    
    
    
                        <style>
                            #win_firefox_install_img .activation {
                            }

                            #win_firefox_install_img .installation {
                                width: 869px;
                                height: 331px;
                            }

                            #mac_firefox_install_img .activation {
                            }

                            #mac_firefox_install_img .installation {
                                width: 250px;
                            }

                            #win_chrome_install_img .activation {
                            }

                            #win_chrome_install_img .installation {
                            }

                            #mac_chrome_install_img .activation {
                                width: 250px;
                            }

                            #mac_chrome_install_img .installation {
                            }
                        </style>
                        <div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
                            <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
                            <div style="padding-bottom:10px;text-align:center">
                                <br/><br/>
                            </div>
                        </div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="//js.limrev.one/1ba208cf31fb5a6a592b902955c8770b.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = '/install/unsupported.aspx';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = false;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
    </script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-game-launch-interface-enabled="False" data-is-protocol-handler-launch-enabled="False" data-is-user-logged-in="False" data-os-name="Unknown" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img src="//images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress"/>
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel"/>
        </div>
    </div>
</div>
<div id="ProtocolHandlerStartingDialog" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">

        </div>
        <div class="ph-logo-row">
            <img src="//images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R"/>
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                ROBLOX is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img src="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24"/>
            </div>
        </div>
    </div>
</div>
<div id="ProtocolHandlerAreYouInstalled" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">
            <span class="icon-close simplemodal-close"></span>
        </div>
        <div class="ph-logo-row">
            <img src="//images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R"/>
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                You're moments away from getting into the game!
            </p>
            <div>
                <button type="button" class="btn btn-primary-md" id="ProtocolHandlerInstallButton">
                    Download and Install ROBLOX
                </button>
            </div>
            <div class="small">
                <a href="https://en.help.<?= $url ?>/hc/en-us/articles/204473560" class="text-name" target="_blank">Click here for help</a>
            </div>

        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
        Check <b>Remember my choice</b> and click
            <img src="//images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application"/>
        in the dialog box above to join games faster in the future!
    </p>
</div>


    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd"></div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="//www.<?= $url ?>/premium/membership?ctx=preroll" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            if (Roblox.VideoPreRoll) {
                Roblox.VideoPreRoll.showVideoPreRoll = false;
                Roblox.VideoPreRoll.isPrerollShownEveryXMinutesEnabled = true;
                Roblox.VideoPreRoll.loadingBarMaxTime = 33000;
                Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation"; 
                    Roblox.VideoPreRoll.videoOptions.categories = "AgeUnknown,GenderUnknown";
                                     Roblox.VideoPreRoll.videoOptions.id = "games";
                Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
                Roblox.VideoPreRoll.videoPlayingTimeout = 41000;
                Roblox.VideoPreRoll.videoLogNote = "NotWindows";
                Roblox.VideoPreRoll.logsEnabled = true;
                Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
                Roblox.VideoPreRoll.adTime = 15;
                    
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 192800;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";
                
                                    
                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 2370766;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Category = "lego";
                
                $(Roblox.VideoPreRoll.checkEligibility);
            }
        });
    </script>


<div id="GuestModePrompt_BoyGirl" class="Revised GuestModePromptModal" style="display:none;">
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="cursor: pointer; margin-left:455px;top:7px; position:absolute;"></a>
    </div>
    <div class="Title">
        Choose Your Avatar
    </div>
    <div style="min-height: 275px; background-color: white;">
        <div style="clear:both; height:25px;"></div>

        <div style="text-align: center;">
            <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style="float:left; margin-left:45px;"></div>
            <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style="float:right; margin-right:45px;"></div>
        </div>
        <div style="clear:both; height:25px;"></div>
        <div class="RevisedFooter">
            <div style="width:200px;margin:10px auto 0 auto;">
                <a href="//www.<?= $url ?>/?returnUrl=https%3A%2F%2Fforum.<?= $url ?>%2Fforum%2FDefault.aspx"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="//www.<?= $url ?>/newlogin?returnUrl=https%3A%2F%2Fforum.<?= $url ?>.%2Fforum%2FDefault.aspx">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
                 window.location = '/install/unsupported.aspx'; return false;
    }

</script>

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>  

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
        <div class="ConfirmationModalButtonContainer">
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


    
        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    

    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = '<?= $url ?>';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
            Roblox.CookieUpgrader.upgrade("RBXSource", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie); } });
            Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie); } });
                
                Roblox.CookieUpgrader.upgrade("RBXMarketing", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>
    <script>
        var _comscore = _comscore || [];
        _comscore.push({ c1: "2", c2: "6035605", c3: "", c4: "", c15: "" });

        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="http://b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/>
    </noscript>



</body>                
</html>