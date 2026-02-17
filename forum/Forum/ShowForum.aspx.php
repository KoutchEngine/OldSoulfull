<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, false);
    $site->invitekey();

    $ForumID = 0;

    if(isset($_GET['ForumID']))
    {
        $ForumID = (int)$_GET['ForumID'];
    }

    $ForumThing = $site->getForumThing($ForumID);

    if($ForumID == 0)
    {
        http_response_code(403);
        return;
    } else if($ForumThing) {
        $Forum = $site->getForum($ForumThing['forumid']);
    } else {
        http_response_code(403);
        return;
    }
?>


<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<!-- MachineID: WEB93 -->
<head id="ctl00_Head1">
<title>
	ROBLOX.com
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    
<link rel="stylesheet" href="https://static.<?= $url ?>/css/page___c1532fc81e9d88caa1ef9ce34741067a_m.css/fetch"/>

        <?php $site->robloxHtml("HTMLStarterPack_MainCSS");?><title>ROBLOX Forum</title>

        <link rel="stylesheet" href="//forum.<?= $url ?>/Forum/skins/default/style/default.css" type="text/css"/><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta http-equiv="Content-Language" content="en-us"/><meta name="author" content="ROBLOX Corporation"/><meta id="ctl00_metadescription" name="description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/><meta id="ctl00_metakeywords" name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="//www.<?= $url ?>/js/jquery/jquery-1.11.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>

<script type="text/javascript" src="//www.<?= $url ?>/js/jquery/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

    <script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', '<?= $url ?>']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
    _gaq.push(['b._trackPageview']);


        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', '<?= $url ?>']);
        
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<script type="text/javascript" src="//js.<?= $url ?>/2cad45a02f66a73c483b4898aa955d0e.js"></script>
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
</script>
<script type="text/javascript">
    Roblox.config.externalResources = [];
    Roblox.config.paths['Pages.Catalog'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/c14a216bd7773e7b637b4e6c3c2e619d.js';
    Roblox.config.paths['Pages.CatalogShared'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/398bbec874ae432b21a25c94ce57fc57.js';
    Roblox.config.paths['Widgets.AvatarImage'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/6bac93e9bb6716f32f09db749cec330b.js';
    Roblox.config.paths['Widgets.DropdownMenu'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';
    Roblox.config.paths['Widgets.GroupImage'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';
    Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/3368571372da9b2e1713bb54ca42a65a.js';
    Roblox.config.paths['Widgets.ItemImage'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/8db82e6d725b907e91441b849cc35e47.js';
    Roblox.config.paths['Widgets.PlaceImage'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';
    Roblox.config.paths['Widgets.SurveyModal'] = 'https://web.archive.org/web/20160612172234/http://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';
</script>

<script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type="text/javascript" src="//js.<?= $url ?>/16994b0cbe9c1d943e0de0fade860343.js"></script>


        <link rel="canonical" href="https://forum.<?= $url ?>/Forum/ShowForum.aspx?ForumID=46"/>
        <script type="text/javascript">
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
    <script type="text/javascript">Roblox.XsrfToken.setToken('s/uu0qKza4sr');</script>
 
    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>
  
<style type="text/css">
    
</style>
<form name="aspnetForm" method="post" action="//forum.<?= $url ?>/Forum/ShowForum.aspx?ForumID=46" id="aspnetForm" class="nav-container no-gutter-ads">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="sxyc427gWetbd/bKBKineJV1vfixVG4eWMvXNEn1VzhRThd3d2hkBUN6noaXXKBxwOWakrCQzaZN2iNl6jI5To1Yc6ZV1L2yycae+SWKxC7C95wgFlM1Lqbazkj2WhPTFqHc7SS1iOc59XzVX0D9ZY0fMKYPLuHZC9htTC7Qc4U/J061cc1CK16SFEGU1OmpTaqPmmTNr3aONJ3MBmwm9Sn/USvhaoCkA+v6LWlxKS6D8Hfnhx68gOKZPJhyvh2TVn1k7w3251yIZHHfRQBXmmbm+zgsqUxf08EhUFvaM4IJ0fAWAKjMm6dqxZr8cP33QDKit5SDKo8nMKfm05tP42F3KW0uVlYsmLnm3IUcCwd3EZGENZcC+LAjp9UC3ejbFR35viaA8c0xShkXOkPYNcN2wWyFi6xW0p/sdl1QBgo4XzWhBxs/6JUTNgv6KZ1z19nSp+p56+8hkhftHxh+aFrf4tgCMcItsgRrkFqyKlelwVVQdbCxtz/yrASG/4Ac4oFUm8Gi1fhx4EG9qTzhHw2cshnPqMpDYJn+gSf9kN85GAunpEmOGqsW/ouwivFLCvMJdyJ/MtyR4lXsAD7Uxg/dGTWop1Sumj/ywsRy3WyOCAX2/H+Eo4p6yoLueopVfkoeOYwv9UsiAoLCnDDa2Ll6bSeni+PjLA0I57ZV7BTw08HQ9uNjAS1BGPwXRlEewMA8hQ722HjLSmVozbEk9ewNqy1kCdKDjZsMAnkDKjVXQ6iJwgI79b06/FFg+EIf93+szFasLJg2uoqbViD8BtmrHIxEI+Ha4753jnFjEr9mYqqhLJy/KjGdIqdRl1EEo/y5AuP5qwLRzG55FqSo3aGk4c/pdjtBCMrbnSNEgppmuTVVlwVO1ZTWQlMF9FGVNxNvVrui0HPR9jmOVg97wi/DKmkCdZ38tS1nb8t19hSGjx6YQqxql/3P/cU64apAq8TXvU2Lh7LjxHLBhrMXekMeMnwiZyk4Dk30Sn3qG5lUF2LKdFeFImh0ZP6t6iVWBY1PTvvW7j64+KFOT4OhJbecCl1vjcCBFOf64NhkDbUAITza"/>
</div>


<script src="//www.<?= $url ?>/js/Microsoft/MicrosoftAjax.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys._Application && Sys.Observer)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=uHIkleVeDJf4xS50Krz-yA3kt4iEPLwQOcXDJXuiLb543xmSxgoBWyWb-0CTRrqRXPsCyYHFJoMX6TPqspOUhmvwRxW7JGKByJCuSKPDJkedBK4vZ68d-hQEQYwPVMjKP6tsCULlkgnx_6P0HwSsu1ZPvc01&t=ffffffff805766b3"><\/script>');//]]>
</script>

<script src="//forum.<?= $url ?>/ScriptResource.axd?d=m0T0rifdexx3RKS_CURT2quiUlTYN3q6m4pA8WBdNl1ihzotG4PfWcG65SWcWaBRkOXSeYJJzuzNy4b6j5B41oOflihf2NaS28HmTI0RPvG6-Xpm3VX79SA89cyFpThY06iYAPySjM1lBvfgTgpxOdeVdhqftQ8coOWNFf5VRyYH0gat2RxGW5L0WpBYak-hQdSvIdy_VObr-tEqtISmbG1XfoOMGoSQfLwZceRZgN4vZvZ90" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="978321BF"/>
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="fzSrWN2Fea333HmVB4uN21WjWNZiAZp2KP7Mp9ufpLLXGI+Up/Jur9/8RRJpknI1w/e87+n0aDYzZvG7uV+vc0mTVMV/UWruSpp3icI5GkpYVNqQrwWAKaLtfSv//d68MeTw3ivlB12smX7eSOlbY6uOkAx8ClWj7f4C5RIMrr87JQ5YdiPbR0WGdXugg/HdV/D2M/8xhD0XUeWO2jDuCVhbfrL2+rZ2WF9YvtvlnpN8+078oEQHEoDzYQP9XsKJJZa2D1kNBaXInlse9RZ+LLsqpdOBLPE0xACbGNDbQzpgIEiBwWXivuOnH0LipYF3EZl5ZC7pH3ZuKtveQwRn5MnyuP7IHZdX705JXHCFYTBOSnL+fSLVoWfIW2zdugSL1/k9NWSLEhrp8mmuLSTth+VVpw0JTwylhpkd+SU50mAUHhcPHa+zuWdNFWigSFOILsddSGZum+3Kfoof3Wr3bfsLTQ8="/>
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
			<td id="ctl00_cphRoblox_CenterColumn" class="CenterColumn">
				<br>
				<span id="ctl00_cphRoblox_ThreadView1">

<table cellpadding="0" width="100%">
	<tr>
		<td align="left"><span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1" name="Whereami1">
<div>
    <nobr>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkHome" class="linkMenuSink notranslate" href="/web/20160612172234/http://forum.roblox.com/Forum/Default.aspx">SOULFULL Forum</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=1"><?= $Forum['title'] ?></a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_ForumSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_LinkForum" class="linkMenuSink notranslate" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowForum.aspx?ForumID=46"><?= $ForumThing['title'] ?></a>
    </nobr>
</div></span></td>
        <td align="right"><span id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1">

<div id="forum-nav" style="text-align: right">
	<a id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1_ctl00_HomeMenu" class="menuTextLink first" href="/web/20160612172234/http://forum.roblox.com/Forum/Default.aspx">Home</a>
	<a id="ctl00_cphRoblox_ThreadView1_ctl00_Navigationmenu1_ctl00_SearchMenu" class="menuTextLink" href="/web/20160612172234/http://forum.roblox.com/Forum/Search/default.aspx">Search</a>
	
	
	
	
	
	
	
</div>
</span></td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr style="padding-bottom:5px;">
		<td valign="bottom" align="left">
		    <a id="ctl00_cphRoblox_ThreadView1_ctl00_NewThreadLinkTop" class="btn-control btn-control-medium verified-email-act" href="/web/20160612172234/http://forum.roblox.com/Forum/AddPost.aspx?ForumID=46">
				New Thread
			</a>
		</td>
		<td align="right">
		    <span class="normalTextSmallBold">Search this forum: </span>
			<input name="ctl00$cphRoblox$ThreadView1$ctl00$Search" type="text" id="ctl00_cphRoblox_ThreadView1_ctl00_Search"/>
			<input type="submit" name="ctl00$cphRoblox$ThreadView1$ctl00$SearchButton" value=" Go " id="ctl00_cphRoblox_ThreadView1_ctl00_SearchButton" class="translate btn-control btn-control-medium forum-btn-control-medium"/>
        </td>
	</tr>
	<tr>
		<td valign="top" colspan="2">
		    <div style="height:7px"></div>
		    <table id="ctl00_cphRoblox_ThreadView1_ctl00_ThreadList" class="tableBorder" cellspacing="1" cellpadding="3" border="0" style="width:100%;">
	<tr class="forum-table-header">
		<th align="left" colspan="3" style="height:25px;">&nbsp;Subject&nbsp;</th><th align="left" style="white-space:nowrap;">&nbsp;Author&nbsp;</th><th align="center">&nbsp;Replies&nbsp;</th><th align="center">&nbsp;Views&nbsp;</th><th align="center" style="white-space:nowrap;">&nbsp;Last Post&nbsp;</th>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Popular post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/popular-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=181029514"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Rules for all Forums
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/7733466/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				InceptionTime
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">1</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">34,833</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=181029514#181029541"><div>
			<span class="normalTextSmaller"><b>Pinned Post</b></span>
		</div><div class="normalTextSmaller notranslate">fixylol</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030443"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				what do you think bloxy cola tastes like
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/707641/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				hamy399
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">11</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">41</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030443#191031261"><div>
			<span class="normalTextSmaller"><b>12:22 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Jake_Brake</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030703"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				@SCS Q And A
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/26605080/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				BloodDragonII
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">1</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">16</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030703#191031255"><div>
			<span class="normalTextSmaller"><b>12:22 PM</b></span>
		</div><div class="normalTextSmaller notranslate">ZzDignityzZ</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029323"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				ROBLOX is back at it again with the greediness! :D
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/30224922/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				epicface123321177
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">8</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">69</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029323#191031253"><div>
			<span class="normalTextSmaller"><b>12:22 PM</b></span>
		</div><div class="normalTextSmaller notranslate">bestbuddyma13</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031095"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				I say I improved
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/96392327/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				Creamyfudgecake
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">4</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">8</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031095#191031242"><div>
			<span class="normalTextSmaller"><b>12:22 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Creamyfudgecake</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029674"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				I somehow gained over 11k visits over the past week.
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/2132882/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				Captain025
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">2</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">36</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029674#191031221"><div>
			<span class="normalTextSmaller"><b>12:21 PM</b></span>
		</div><div class="normalTextSmaller notranslate">StickmanMaster</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031220"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				I actually found stickmasterluke&#39;s video when he&#39;s young
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/41843700/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				zex469
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">4</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031220#191031220"><div>
			<span class="normalTextSmaller"><b>12:21 PM</b></span>
		</div><div class="normalTextSmaller notranslate">zex469</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031219"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Donations Please
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/34301930/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				marcelliusgamer11
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">1</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031219#191031219"><div>
			<span class="normalTextSmaller"><b>12:21 PM</b></span>
		</div><div class="normalTextSmaller notranslate">marcelliusgamer11</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030602"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Tutorial: Helping A Friend Play Roblox!
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/52677546/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				xdmailll
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">4</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">16</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030602#191031216"><div>
			<span class="normalTextSmaller"><b>12:21 PM</b></span>
		</div><div class="normalTextSmaller notranslate">xdmailll</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191028773"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Who is the best ROBLOX Builder?
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/77802954/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				DoMayum
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">11</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">50</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191028773#191031209"><div>
			<span class="normalTextSmaller"><b>12:21 PM</b></span>
		</div><div class="normalTextSmaller notranslate">SCS</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031049"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				How do you get that weird robux icon with the amount of robu
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/57515128/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				ZzDignityzZ
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">3</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">11</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191031049#191031188"><div>
			<span class="normalTextSmaller"><b>12:21 PM</b></span>
		</div><div class="normalTextSmaller notranslate">ZzDignityzZ</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Popular post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/popular-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191028217"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				What year were you born?
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"><a class="linkSmall" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191028217&amp;PageIndex=1">1</a><span class="normalTextSmall">, </span><a class="linkSmall" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191028217&amp;PageIndex=2">2</a></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/26605080/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				BloodDragonII
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">27</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">115</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191028217#191031173"><div>
			<span class="normalTextSmaller"><b>12:21 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Claof</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=190540027"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				The safe chat is more annoying now
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/111231778/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				Sevoly
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">9</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">64</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=190540027#191031121"><div>
			<span class="normalTextSmaller"><b>12:20 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Jake_Brake</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030023"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Hey guys does anyone want to make a atr game together
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/96392327/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				Creamyfudgecake
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">7</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">25</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030023#191031075"><div>
			<span class="normalTextSmaller"><b>12:20 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Swoinks</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Popular post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/popular-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191023336"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				whats the story behind your username
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"><a class="linkSmall" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191023336&amp;PageIndex=1">1</a><span class="normalTextSmall">, </span><a class="linkSmall" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191023336&amp;PageIndex=2">2</a></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/29570541/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				XDaft
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">36</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">155</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191023336#191031072"><div>
			<span class="normalTextSmaller"><b>12:19 PM</b></span>
		</div><div class="normalTextSmaller notranslate">DangerousTimes</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191012996"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Tfw you dont have enough R$ for the new limited
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/52112767/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				DoomProGamer
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">10</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">76</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191012996#191031037"><div>
			<span class="normalTextSmaller"><b>12:19 PM</b></span>
		</div><div class="normalTextSmaller notranslate">StickmanMaster</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029744"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				what was the first item you bought?
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/104478892/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				springtrapthethird1
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">10</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">59</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029744#191030897"><div>
			<span class="normalTextSmaller"><b>12:17 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Swoinks</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191025593"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Controls
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/112594867/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				MannyGame500
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">7</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">19</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191025593#191030857"><div>
			<span class="normalTextSmaller"><b>12:17 PM</b></span>
		</div><div class="normalTextSmaller notranslate">BloodDragonII</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191019046"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				[ Content Deleted ]
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/64807374/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				WackyStealthtiger
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">5</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">34</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191019046#191030804"><div>
			<span class="normalTextSmaller"><b>12:16 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Xarmut</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030787"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				How to know a robloxian (or whatever) is a kid.
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/115366973/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				KingElijahXL
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">1</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030787#191030787"><div>
			<span class="normalTextSmaller"><b>12:16 PM</b></span>
		</div><div class="normalTextSmaller notranslate">KingElijahXL</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030168"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Who wants no-fee ROBUX transfers?
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/18612174/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				iPhynx
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">4</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">23</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030168#191030738"><div>
			<span class="normalTextSmaller"><b>12:15 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Captain025</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post allows no replies (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/locked-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030599"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				follow me if u wanna join
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/104145886/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				Mirldredsoto795
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">7</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030599#191030599"><div>
			<span class="normalTextSmaller"><b>12:13 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Mirldredsoto795</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029979"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				I&#39;m having a weird feeling.
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/90030403/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				Camdentravis
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">6</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">31</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029979#191030566"><div>
			<span class="normalTextSmaller"><b>12:13 PM</b></span>
		</div><div class="normalTextSmaller notranslate">Camdentravis</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post allows no replies (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/locked-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029363"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				calling any mod
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/39785748/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				vikingsfan397alt
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">3</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">40</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191029363#191030547"><div>
			<span class="normalTextSmaller"><b>12:13 PM</b></span>
		</div><div class="normalTextSmaller notranslate">SCS</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post allows no replies (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/locked-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030536"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				Ally Program || How it works
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/62834790/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				MorphIntoSeasons
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">-</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">3</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191030536#191030536"><div>
			<span class="normalTextSmaller"><b>12:12 PM</b></span>
		</div><div class="normalTextSmaller notranslate">MorphIntoSeasons</div></a></td>
	</tr><tr class="forum-table-row">
		<td align="center" valign="middle" style="width:25px;"><img title="Post (Not Read)" src="/web/20160612172234im_/http://forum.roblox.com/images/Forums/thread-unread.png" style="border-width:0px;"/></td><td class="notranslate" style="height:25px;"><a class="post-list-subject" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191027626"><div class="thread-link-outer-wrapper">
			<div class="thread-link-container notranslate">
				roblox, your so silly!
			</div>
		</div></a></td><td class="notranslate" style="width:80px;width:90px;padding-right:12px;"></td><td align="left" style="width:100px;"><a class="post-list-author notranslate" href="https://web.archive.org/web/20160612172234/https://www.roblox.com/users/72401495/profile"><div class="thread-link-outer-wrapper">
			<div class="normalTextSmaller thread-link-container">
				iDehCthulhu
			</div>
		</div></a></td><td align="center" style="width:50px;"><span class="normalTextSmaller">4</span></td><td align="center" style="width:50px;"><span class="normalTextSmaller">39</span></td><td align="center" style="width:100px;white-space:nowrap;"><a class="last-post" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowPost.aspx?PostID=191027626#191030463"><div>
			<span class="normalTextSmaller"><b>12:12 PM</b></span>
		</div><div class="normalTextSmaller notranslate">MLGPancake360</div></a></td>
	</tr><tr class="forum-table-footer">
		<td colspan="7">&nbsp;</td>
	</tr>
</table>
            <span id="ctl00_cphRoblox_ThreadView1_ctl00_Pager"><table cellspacing="0" cellpadding="0" border="0" style="width:100%;border-collapse:collapse;">
	<tr>
		<td><span class="normalTextSmallBold">Page 1 of 47,543</span></td><td align="right"><span><span class="normalTextSmallBold">Goto to page: </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page0" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page0','')">1</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page1" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page1','')">2</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page2" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page2','')">3</a><span class="normalTextSmallBold"> ... </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page47541" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page47541','')">47,542</a><span class="normalTextSmallBold">, </span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Page47542" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Page47542','')">47,543</a><span class="normalTextSmallBold">&nbsp;</span><a id="ctl00_cphRoblox_ThreadView1_ctl00_Pager_Next" class="normalTextSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$Pager$Next','')">Next</a></span></td>
	</tr>
</table></span>
            
            
		</td>
	</tr>
	<tr>
		<td colspan="2">
			&nbsp;
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2" name="Whereami2">
<div>
    <nobr>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkHome" class="linkMenuSink notranslate" href="/web/20160612172234/http://forum.roblox.com/Forum/Default.aspx">SOULFULL Forum</a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_ForumGroupSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkForumGroup" class="linkMenuSink notranslate" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowForumGroup.aspx?ForumGroupID=1"><?= $Forum['title'] ?></a>
    </nobr>
    <nobr>
        <span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_ForumSeparator" class="normalTextSmallBold"> » </span>
        <a id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami2_ctl00_LinkForum" class="linkMenuSink notranslate" href="/web/20160612172234/http://forum.roblox.com/Forum/ShowForum.aspx?ForumID=46"><?= $ForumThing['title'] ?></a>
    </nobr>
</div></span>
			
		</td>
		<td align="right">
			<span class="normalTextSmallBold">Display threads for: </span><select name="ctl00$cphRoblox$ThreadView1$ctl00$DisplayByDays" id="ctl00_cphRoblox_ThreadView1_ctl00_DisplayByDays">
	<option selected="selected" value="0">All Days</option>
	<option value="1">Today</option>
	<option value="3">Past 3 Days</option>
	<option value="7">Past Week</option>
	<option value="14">Past 2 Weeks</option>
	<option value="30">Past Month</option>
	<option value="90">Past 3 Months</option>
	<option value="180">Past 6 Months</option>
	<option value="360">Past Year</option>

</select>
			<br>
			    <a id="ctl00_cphRoblox_ThreadView1_ctl00_MarkAllRead" class="linkSmallBold" href="javascript:__doPostBack('ctl00$cphRoblox$ThreadView1$ctl00$MarkAllRead','')">Mark all threads as read</a>
			<br>
			<span class="normalTextSmallBold">
				
			</span>
		</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
</span>
			</td>

			<td class="CenterColumn">&nbsp;&nbsp;&nbsp;</td>	
            
            <!-- right column -->
            <td width="160px" style="padding-top:88px;">
                

<iframe name="Roblox_Forums_Right_160x600" allowtransparency="true" frameborder="0" height="612" scrolling="no" src="https://web.archive.org/web/20160612172234if_/http://www.roblox.com/userads/2" width="160" data-js-adtype="iframead"></iframe>

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

<script type="text/javascript" src="//js.<?= $url ?>/1ba208cf31fb5a6a592b902955c8770b.js"></script>

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
        Check <b>Remember my choice</b> and click <img src="//images.roblox.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application"/>  in the dialog box above to join games faster in the future!
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
            <a href="https://www.<?= $url ?>/premium/membership?ctx=preroll" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
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
                <a href="https://www.<?= $url ?>/?returnUrl=https%3A%2F%2Fforum.<?= $url ?>%2FForum%2FShowForum.aspx%3FForumID%3D46"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="https://www.<?= $url ?>/newlogin?returnUrl=https%3A%2F%2Fforum.<?= $url ?>%2FForum%2FShowForum.aspx%3FForumID%3D46">I have an account</a>
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
        <img src="//b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/>
    </noscript>



</body>                
</html>