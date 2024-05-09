<?php
    $url = "s16rev.xyz"; // i'd do $_SERVER http host blah blah but meh that sounds boring

    class Site {
        public function createId()
        {
            global $db;
            $idcheck = "SELECT * FROM ids WHERE 1";
            $id = $db->prepare($idcheck);
            $id->execute();
            $id = $id->fetchAll();
            $id = count($id) + 1;
            
            $query = "INSERT INTO `ids`(`count`) VALUES (:id)";
            $idquery = $db->prepare($query);
            $idquery->execute(['id' => $id]);
            
            return $id;
        }

        public function getPlace($id)
        {
            global $db;
            $query = "SELECT * FROM places WHERE id=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function getGame($id)
        {
            global $db;
            $query = "SELECT * FROM games WHERE id=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function getUser($id)
        {
            global $db;
            $query = "SELECT * FROM users WHERE id=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function getBadge($id)
        {
            global $db;
            $query = "SELECT * FROM badges WHERE badgeId=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function userOwnsItem($userid, $itemid)
        {
            global $db;
            $query = "SELECT * FROM owneditems WHERE userId=:id2 AND itemId=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $itemid, 'id2' => $userid]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function setBrowserTrackerId($userid, $ip)
        {
            global $db;
            $browserTrackerId = bin2hex(random_bytes(10));
            $query = "INSERT INTO `browsertrackerids`(`userid`, `ip`, `id`) VALUES (:id2, :ip, :id)";
            $addbti = $db->prepare($query);
            $addbti->execute(['id' => $browserTrackerId, 'id2' => $userid, 'ip' => $ip]);
            return $browserTrackerId;
        }

        public function getBrowserTrackerId($id)
        {
            global $db;
            $query = "SELECT * FROM browsertrackerids WHERE id=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function getBrowserTrackerIdFromIp($ip)
        {
            global $db;
            $query = "SELECT * FROM browsertrackerids WHERE ip=:ip";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['ip' => $ip]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function LoginState($LoggedInRedirect, $NotLoggedInRedirect)
        {
            global $db;
            global $user;
            global $url;
            global $loggedin;
            global $loggedin2;
            global $loggedin3;
            global $site;

            $loggedin = false;
            $loggedin2 = "false";
            $loggedin3 = "False";

            if(isset($_COOKIE['_ROBLOSECURITY']))
            {
                $query = "SELECT * FROM users WHERE authticket=:ticket";
                $usercheck = $db->prepare($query);
                $usercheck->execute(['ticket' => htmlspecialchars(filter_var($_COOKIE['_ROBLOSECURITY']))]);
                $usercheck = $usercheck->fetch();

                if($usercheck) {
                    $user = $usercheck;
                    $loggedin = true;
                    $loggedin2 = "true";
                    $loggedin3 = "True";
                    if($LoggedInRedirect)
                    {
                        header('Location: https://www.'.$url.'/home');
                    } else {
                        if(isset($_COOKIE['browserTrackerId']))
                        {
                            $bti = htmlspecialchars(filter_var($_COOKIE['browserTrackerId']));
                            if($site->getBrowserTrackerId($bti))
                            {
                            } else {
                                $bti = $site->setBrowserTrackerId($user['id'], $_SERVER['REMOTE_ADDR']);
                                setcookie('browserTrackerId', $bti, time() + (10 * 365 * 24 * 60 * 60), '/', '.'.$url);
                                sleep(2);
                            }
                        } else {
                            if($site->getBrowserTrackerIdFromIp($_SERVER['REMOTE_ADDR']))
                            {
                                $bti = $site->getBrowserTrackerIdFromIp($_SERVER['REMOTE_ADDR']);
                                setcookie('browserTrackerId', $bti['id'], time() + (10 * 365 * 24 * 60 * 60), '/', '.'.$url);
                                sleep(2);
                            } else {
                                $bti = $site->setBrowserTrackerId($user['id'], $_SERVER['REMOTE_ADDR']);
                                setcookie('browserTrackerId', $bti, time() + (10 * 365 * 24 * 60 * 60), '/', '.'.$url);
                                sleep(2);
                            }
                        }
                    }
                } else {
                    setcookie('.ROBLOSECURITY', 'no', time() - (10 * 365 * 24 * 60 * 60), '/', '.'.$url);
                    sleep(2);
                    if($NotLoggedInRedirect)
                    {
                        header('Location: https://www.'.$url);
                    }
                }
            } else {
                if($NotLoggedInRedirect)
                {
                    header('Location: https://www.'.$url);
                }
            }
        }

        public function robloxHtml($which)
        {
            global $user;
            global $url;
            global $loggedin;
            global $loggedin3;

            if($which == "Navigation")
            {
                /*
                notification:
                    <div class="notification-red " title="25">
                    25
                </div>
                notification (blue):
                    <span class="notification-blue " title="2">2</span>
                events stuff:
                 <li class="rbx-nav-sponsor" ng-non-bindable>
                            <a class="menu-item" href="https://www.'.$url.'/event/ImaginationEvent" title="ImaginationEvent">
                                    <img src="//images.rbxcdn.com/34fa904da537a1541d0e496967420a00" />
                            </a>
                        </li>
                */

                echo '<div id="header" class="navbar-fixed-top rbx-header" role="navigation">
    <div class="container-fluid">
        <div class="rbx-navbar-header">
            <div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
                    <span class="icon-nav-menu"></span>

                

            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="//www.'.$url.'/">
                    <span class="icon-logo"></span>
                    <span class="icon-logo-r"></span>
                </a>
            </div>
        </div>
        <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
            <li>
                <a class="nav-menu-title" href="https://www.'.$url.'/games">Games</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.'.$url.'/catalog">Catalog</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.'.$url.'/develop">Develop</a>
            </li>
            <li>
                <a class="buy-robux nav-menu-title" href="https://www.'.$url.'/upgrades/robux?ctx=nav">ROBUX</a>
            </li>
        </ul><!--rbx-navbar-->
        <div id="navbar-universal-search" class="navbar-left rbx-navbar-search col-xs-5 col-sm-6 col-md-3" data-behavior="univeral-search" role="search">
            <div class="input-group">

                <input id="navbar-search-input" class="form-control input-field" type="text" placeholder="Search" maxlength="120">
                <div class="input-group-btn">
                    <button id="navbar-search-btn" class="input-addon-btn" type="submit">
                        <span class="icon-nav-search"></span>
                    </button>
                </div>
            </div>
            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
                <li class="rbx-navbar-search-option selected" data-searchurl="https://www.'.$url.'/games/?Keyword=">
                    <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Games</span>
                </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.'.$url.'/search/users?keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in People</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.'.$url.'/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Catalog</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.'.$url.'/groups/search.aspx?val=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Groups</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.'.$url.'/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Library</span>
                        </li>
            </ul>
        </div><!--rbx-navbar-search-->
        <div class="navbar-right rbx-navbar-right col-xs-4 col-sm-3">

<ul class="nav navbar-right rbx-navbar-icon-group">
    <li class="navbar-icon-item">
        <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-setting" data-viewport="#header" data-original-title="" title="">
            <span class="icon-nav-settings" id="nav-settings"></span>
        </a>
        <div class="rbx-popover-content" data-toggle="popover-setting">
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a class="rbx-menu-item" href="https://www.'.$url.'/my/account">
                        Settings
                    </a>
                </li>
                <li><a class="rbx-menu-item" href="https://www.'.$url.'/Help/Builderman.aspx" target="_blank">Help</a></li>
                <li><a class="rbx-menu-item" data-behavior="logout" data-bind="//www.'.$url.'/authentication/logout">Logout</a></li>
            </ul>
        </div>
    </li>
    <li class="navbar-icon-item">
        <a id="nav-robux-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-robux" data-original-title="" title="">
            <span class="icon-nav-robux" id="nav-robux"></span>
            <span class="rbx-text-navbar-right" id="nav-robux-amount">'.$user['robux'].'</span>
        </a>
        <div class="rbx-popover-content" data-toggle="popover-robux">
            <ul class="dropdown-menu" role="menu">
                <li><a href="https://www.'.$url.'/My/Money.aspx#/#Summary_tab" id="nav-robux-balance" class="rbx-menu-item">'.$user['robux'].' ROBUX</a></li>
                <li><a href="https://www.'.$url.'/upgrades/robux?ctx=navpopover" class="rbx-menu-item">Buy ROBUX</a></li>
            </ul>
        </div>
    </li>
    <li class="rbx-navbar-right-search" data-toggle="toggle-search">
        <a class="rbx-menu-icon rbx-menu-item">
            <span class="icon-nav-search-white"></span>
        </a>
    </li>
</ul>        </div><!-- navbar right-->
        <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
            <li>
                <a class="nav-menu-title" href="https://www.'.$url.'/games">Games</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.'.$url.'/catalog/">Catalog</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.'.$url.'/develop">Develop</a>
            </li>
            <li>
                <a class="buy-robux nav-menu-title" href="https://www.'.$url.'/upgrades/robux?ctx=nav">ROBUX</a>
            </li>
        </ul><!--rbx-navbar-->
    </div>
</div>

<!-- LEFT NAV MENU -->
    <div id="navigation" class="rbx-left-col" data-behavior="left-col">
        <ul>
            <li class="text-lead">
                <a class="text-overflow" href="https://www.'.$url.'/users/'.$user['id'].'/profile">'.$user['username'].'</a>
            </li>
            <li class="rbx-divider"></li>
        </ul>

        <div class="rbx-scrollbar" data-toggle="scrollbar" onselectstart="return false;">
            <ul>
                <li><a href="https://www.'.$url.'/home" id="nav-home"><span class="icon-nav-home"></span><span>Home</span></a></li>
                <li><a href="https://www.'.$url.'/users/81956425/profile" id="nav-profile"><span class="icon-nav-profile"></span><span>Profile</span></a></li>
                <li>
                    <a href="https://www.'.$url.'/my/messages/#!/inbox" id="nav-message" data-count="2">
                        <span class="icon-nav-message"></span><span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.'.$url.'/users/81956425/friends#!/friend-requests" id="nav-friends" data-count="23">
                        <span class="icon-nav-friends"></span><span>Friends</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.'.$url.'/my/character.aspx" id="nav-character">
                        <span class="icon-nav-charactercustomizer"></span><span>Avatar</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.'.$url.'/users/81956425/inventory" id="nav-inventory">
                        <span class="icon-nav-inventory"></span><span>Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.'.$url.'/my/money.aspx#/#TradeItems_tab" id="nav-trade">
                        <span class="icon-nav-trade"></span><span>Trade</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.'.$url.'/my/groups.aspx" id="nav-group">
                        <span class="icon-nav-group"></span><span>Groups</span>
                    </a>
                </li>
                <li>
                    <a href="https://forum.'.$url.'/forum/" id="nav-forum">
                        <span class="icon-nav-forum"></span><span>Forum</span>
                    </a>
                </li>
                <li>
                    <a href="//blog.'.$url.'" id="nav-blog">
                        <span class="icon-nav-blog"></span><span>Blog</span>
                    </a>
                </li>
                <li class="rbx-upgrade-now">
                    <a href="https://www.'.$url.'/premium/membership?ctx=leftnav" class="btn-secondary-md" id="upgrade-now-button">Upgrade Now</a>
                </li>
                    <li class="font-bold small">
                        Events
                    </li>
            </ul>
        </div>
    </div>';
            } else if ($which == "Footer") {
                echo '<footer class="container-footer">
                <div class="footer">
                    <ul class="row footer-links">
                            <li class="col-4 col-xs-2 footer-link">
                                <a href="//corp.'.$url.'" class="text-footer-nav roblox-interstitial" target="_blank">
                                    About Us
                                </a>
                            </li>
                            <li class="col-4 col-xs-2 footer-link">
                                <a href="//corp.'.$url.'/jobs" class="text-footer-nav roblox-interstitial" target="_blank">
                                    Jobs
                                </a>
                            </li>
                        <li class="col-4 col-xs-2 footer-link">
                            <a href="//blog.'.$url.'" class="text-footer-nav" target="_blank">
                                Blog
                            </a>
                        </li>
                        <li class="col-4 col-xs-2 footer-link">
                            <a href="//corp.'.$url.'/parents" class="text-footer-nav roblox-interstitial" target="_blank">
                                Parents
                            </a>
                        </li>
                        <li class="col-4 col-xs-2 footer-link">
                            <a href="//en.help.'.$url.'/" class="text-footer-nav roblox-interstitial" target="_blank">
                                Help
                            </a>
                        </li>
                        <li class="col-4 col-xs-2 footer-link">
                            <a href="https://www.'.$url.'/Info/Privacy.aspx" class="text-footer-nav privacy" target="_blank">
                                Privacy
                            </a>
                        </li>
                    </ul>
                    <p class="text-footer footer-note">
                        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a target="_blank" href="//corp.'.$url.'" class="text-link roblox-interstitial">ROBLOX Corporation</a>, ©2016.
                        Patents pending. ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K\'\Nex, and no resemblance to the products of these companies is intended.
                        Use of this site signifies your acceptance of the <a href="https://www.'.$url.'/info/terms-of-service" target="_blank" class="text-link">Terms and Conditions</a>.
                    </p>
                </div>
            </footer>';
            } else if ($which == "HTMLStarterPack") {
                echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="author" content="ROBLOX Corporation"/>
                <meta name="description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/>
                <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
                <meta name="apple-itunes-app" content="app-id=431946152"/>
                <meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY"/>
                    <meta property="og:site_name" content="ROBLOX"/>
                    <meta property="og:title" content="ROBLOX"/>
                    <meta property="og:type" content="website"/>
                    <meta property="og:url" content="https://www.'.$url.'"/>
                    <meta property="og:description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/>
                    <meta property="og:image" content="images/rbxcdn/fb70fd2b56107a0d43f2f98658885702.jpg"/>
                    <meta property="fb:app_id" content="190191627665278">
                    <meta name="twitter:card" content="summary_large_image">
                    <meta name="twitter:site" content="@ROBLOX">
                    <meta name="twitter:title" content="ROBLOX">
                    <meta name="twitter:description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration.">
                    <meta name="twitter:creator">
                    <meta name="twitter:image1" content="images/rbxcdn/fb70fd2b56107a0d43f2f98658885702.jpg"/>
                    <meta name="twitter:app:country" content="US">
                    <meta name="twitter:app:name:iphone" content="ROBLOX Mobile">
                    <meta name="twitter:app:id:iphone" content="431946152">
                    <meta name="twitter:app:url:iphone">
                    <meta name="twitter:app:name:ipad" content="ROBLOX Mobile">
                    <meta name="twitter:app:id:ipad" content="431946152">
                    <meta name="twitter:app:url:ipad">
                    <meta name="twitter:app:name:googleplay" content="ROBLOX">
                    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
                    <meta name="twitter:app:url:googleplay"/>
                
                
                        <link href="images/rbxcdn/7aee41db80c1071f60377c3575a0ed87.ico" rel="icon"/>
                                <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
                
                    <link rel="canonical" href="https://www.<?php echo $url; ?>/home"/>
                    
                    
                        <link rel="stylesheet" href="/CSS/LeanBaseStyle.css" />';
            } else if($which == "JS_1")
            {
                ?>
            
            <script type='text/javascript'>
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
                            if (typeof cookie.ts === 'undefined' || isNaN(new Date(cookie.ts))) {
                                localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                                return false;
                            }
                        } catch (ex) {
                            return false;
                        }
            
                        var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
                        if (daysSinceFirstVisit == 1 && typeof cookie.odr === 'undefined') {
                            RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                            cookie.odr = 1;
                        }
                        if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === 'undefined') {
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
            
            
                    <script type='text/javascript'>
                    $(function () {
                        RobloxEventManager.triggerEvent('rbx_evt_newuser', {});
                    });
            
                </script>
            
                
            
            <script type='text/javascript'>
                var Roblox = Roblox || {};
                Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};
            
                Roblox.UpsellAdModal.Resources = {
                    //<sl:translate>
                    title: 'Remove Ads Like This',
                    body: 'Builders Club members do not see external ads like these.',
                    accept: 'Upgrade Now',
                    decline: 'No, thanks'
                    //</sl:translate>
                };
            </script>

<script type='text/javascript' src='//js.rbxcdn.com/e20b65b5f3876e969af34b10d11a9b8d.js.gzip'></script>


            <script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.<?php echo $url; ?>';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = true;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
            
        if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
            window.location.hash = '';
            var continuation = '(' + $.cookie('chromeInstall') + ')';
            play_placeId = $.cookie('chromeInstallPlaceId');
            Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
            $.cookie('chromeInstallPlaceId', null);
            $.cookie('chromeInstallLaunchMode', null);
            $.cookie('chromeInstall', null);
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; 
            Roblox.Client.ResumeTimer(eval(continuation));
        }
</script>
<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href="" id="roblox-confirm-btn"><span></span></a>
            <a href="" id="roblox-decline-btn"><span></span></a>
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
<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
    <div id="modal-dialog" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <div class="modal-top-body">
                    <div class="modal-message"></div>
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays="" data-no-click="">
                        <img class="modal-thumb" alt="generic image">
                    </div>
                </div>
                <div class="modal-btns">
                    <a href="" id="confirm-btn"><span></span></a>
                    <a href="" id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing...">
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};

        //<sl:translate>
        Roblox.Resources.Dialog = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>
<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>

<script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = '<?php echo $url; ?>';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
            Roblox.CookieUpgrader.upgrade("RBXSource", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie); } });
            Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie); } });
                
                Roblox.CookieUpgrader.upgrade("RBXMarketing", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>


    
    <script type='text/javascript' src='//js.rbxcdn.com/a3d0fc23f71b8d010b8bf64ed7d52da5.js.gzip'></script>


    
<script type='text/javascript' src='//js.rbxcdn.com/332fdd406b7dab398d892ddca76501d3.js.gzip'></script>
    <script type='text/javascript' src='//js.rbxcdn.com/6e3d335d35ff8f213c606186bed3a6e1.js.gzip'></script>
        <script type='text/javascript' src='//js.rbxcdn.com/afe3f48a947af6f9a0c6d5a0485c9f6e.js.gzip'></script>
        <script type='text/javascript' src='//js.rbxcdn.com/045483c002abdefee9f2e9598ac48d08.js.gzip'></script>

        <script type='text/javascript'>Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/943dbead6327ef7e601925fc45ffbeb0.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/496e8f05b3aabfcd72a147ddb49aaf1e.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/6bac93e9bb6716f32f09db749cec330b.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script>

    
<script>
    Roblox.XsrfToken.setToken('5T4SfgXu0Z5Z');
</script>

    <script>
        $(function () {
            Roblox.DeveloperConsoleWarning.showWarning();
        });
    </script>
<script type='text/javascript'>
$(function () {
    Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
});
</script>

<script type='text/javascript' src='//js.rbxcdn.com/c8cbaf95dff4461a3addac57cf2838ec.js.gzip'></script>

    

<script type='text/javascript' src='//js.rbxcdn.com/5926309ff55b06c732ffe910f2100b1e.js.gzip'></script>
<script type='text/javascript' src='//js.rbxcdn.com/fcd32c2a954464112017b3290b2c9c83.js.gzip'></script>

            <?php
            } else if($which == "Chat")
            {
                ?>
                <div id="chat-container" class="chat chat-container ng-scope collapsed" ng-modules="robloxApp, chat" ng-controller="chatController" ng-class="{'collapsed': chatLibrary.chatLayout.collapsed, 
                'inApp': chatLibrary.inApp,
                'tablet': chatLibrary.tabletInApp}">
<div id="chat-data-model" class="hidden ng-isolate-scope" chat-data="" chat-view-model="chatViewModel" chat-library="chatLibrary" data-userid="81956425" data-domain="s16rev.xyz" data-gamespagelink="https://www.s16rev.xyz/games" data-chatdomain="https://chat.s16rev.xyz" data-numberofmembersforpartychrome="6" data-avatarheadshotsmultigetlimit="100" data-userpresencemultigetlimit="100" data-intervalofchangetitleforpartychrome="500" data-spinner="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" data-notificationsdomain="https://realtime.s16rev.xyz/" data-devicetype="Computer" data-inapp="false" data-togglechatbarenabled="true" data-smallerchatenabled="true" data-cleanpartyfromconversationenabled="false" data-parytchromedisplaytimestampinterval="300000">
</div>
    <div id="chat-main" class="chat-main" ng-class="{'chat-main-empty': chatLibrary.chatLayout.chatLandingEnabled}" chat-bar="">
        <div id="chat-header" class="chat-windows-header chat-header" ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.headerStyle : ''">
            <div class="chat-header-label" ng-click="toggleChatContainer()" ng-hide="chatLibrary.inApp">
                <span class="font-bold chat-header-title">Chat &amp; Party</span>
            </div>
            <div class="chat-header-label ng-hide" ng-click="toggleChatContainer()" ng-show="chatLibrary.inApp">
                <span class="font-bold chat-header-title">Chat</span>
            </div>
            <div class="chat-header-action">
                <span class="notification-red ng-binding ng-hide" ng-show="chatLibrary.chatLayout.collapsed &amp;&amp; chatViewModel.conversationCount > 0"></span>
                <span id="chat-group-create" class="icon-chat-group-create ng-hide" ng-hide="chatLibrary.chatLayout.collapsed || chatLibrary.chatLayout.errorMaskEnable || chatLibrary.chatLayout.chatLandingEnabled || chatLibrary.chatLayout.pageDataLoading" ng-click="launchDialog(newGroup.layoutId)" data-toggle="tooltip" title="" data-original-title="Add at least 2 people to create chat group"></span>
            </div>
        </div>
        <!-- ngIf: !chatLibrary.chatLayout.chatLandingEnabled --><div id="chat-body" class="chat-body ng-scope ng-hide" ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.chatBodyHeight : ''" ng-hide="chatLibrary.chatLayout.errorMaskEnable || chatLibrary.chatLayout.pageDataLoading" ng-if="!chatLibrary.chatLayout.chatLandingEnabled">
            <div class="chat-search" ng-class="{'chat-search-focus': chatLibrary.chatLayout.searchFocus}">
                <input type="text" placeholder="Search" class="chat-search-input ng-pristine ng-valid" ng-model="chatViewModel.searchTerm" ng-focus="chatLibrary.chatLayout.searchFocus = true">
                <span class="icon-chat-search"></span>
                <span class="icon-chat-cancel-search" ng-click="cancelSearch()"></span>
            </div>
            <button id="chat-group-create-btn" type="button" class="btn btn-control-md" ng-click="launchDialog(newGroup.layoutId)" title="Add at least 2 people to create chat group">
                <span>Create Chat Group</span>
            </button>
            <div id="chat-friend-list" class="rbx-scrollbar chat-friend-list ng-scope mCustomScrollbar _mCS_2 mCS_no_scrollbar" lazy-load=""><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                <ul id="chat-friends" class="chat-friends">
                    <!-- ngRepeat: chatUser in chatUserDict | orderList: chatLibrary.chatLayoutIds | filter : {name: chatViewModel.searchTerm} -->
                </ul>
                <div class="chat-loading loading-bottom ng-hide" ng-show="chatLibrary.chatLayout.isChatLoading">
                    <img ng-src="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading ..." class="mCS_img_loaded" src="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif">
                </div>
            </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div><!-- end ngIf: !chatLibrary.chatLayout.chatLandingEnabled -->
        <div id="chat-disconnect" class="chat-disconnect" ng-show="chatLibrary.chatLayout.errorMaskEnable || chatLibrary.chatLayout.pageDataLoading">
            <p ng-show="chatLibrary.chatLayout.errorMaskEnable" class="ng-hide">Trying to connect ...</p>
            <img ng-src="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading ..." src="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif">
        </div>
        <!-- ngIf: chatLibrary.chatLayout.chatLandingEnabled -->
    </div>
    <script type="text/ng-template" id="chat-bar">
    <div id="chat-main" class="chat-main"
         ng-class="{'chat-main-empty': chatLibrary.chatLayout.chatLandingEnabled}" ng-cloak>
        <div id="chat-header"
             class="chat-windows-header chat-header"
             ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.headerStyle : ''">
            <div class="chat-header-label"
                 ng-click="toggleChatContainer()"
                      ng-hide="chatLibrary.inApp">
                <span class="font-bold chat-header-title">Chat & Party</span>
            </div>
            <div class="chat-header-label"
                 ng-click="toggleChatContainer()"
                      ng-show="chatLibrary.inApp">
                <span class="font-bold chat-header-title">Chat</span>
            </div>
            <div class="chat-header-action">
                <span class="notification-red"
                      ng-show="chatLibrary.chatLayout.collapsed && chatViewModel.conversationCount > 0"
                      ng-cloak>{{chatViewModel.conversationCount}}</span>
                <span id="chat-group-create"
                      class="icon-chat-group-create"
                      ng-hide="chatLibrary.chatLayout.collapsed || chatLibrary.chatLayout.errorMaskEnable || chatLibrary.chatLayout.chatLandingEnabled || chatLibrary.chatLayout.pageDataLoading"
                      ng-click="launchDialog(newGroup.layoutId)"
                      data-toggle="tooltip"
                      title="Add at least 2 people to create chat group"
                      ng-cloak></span>
            </div>
        </div>
        <div id="chat-body"
             class="chat-body"
             ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.chatBodyHeight : ''"
             ng-hide="chatLibrary.chatLayout.errorMaskEnable || chatLibrary.chatLayout.pageDataLoading"
             ng-if="!chatLibrary.chatLayout.chatLandingEnabled">
            <div class="chat-search"
                 ng-class="{'chat-search-focus': chatLibrary.chatLayout.searchFocus}">
                <input type="text"
                       placeholder="Search"
                       class="chat-search-input"
                       ng-model="chatViewModel.searchTerm"
                       ng-focus="chatLibrary.chatLayout.searchFocus = true" />
                <span class="icon-chat-search"></span>
                <span class="icon-chat-cancel-search"
                      ng-click="cancelSearch()"></span>
            </div>
            <button id="chat-group-create-btn"
                    type="button"
                    class="btn btn-control-md"
                    ng-click="launchDialog(newGroup.layoutId)"
                    title="Add at least 2 people to create chat group"
                    ng-cloak>
                <span>Create Chat Group</span>
            </button>
            <div id="chat-friend-list" class="rbx-scrollbar chat-friend-list" lazy-load>
                <ul id="chat-friends" class="chat-friends">
                    <li ng-repeat="chatUser in chatUserDict | orderList: chatLibrary.chatLayoutIds | filter : {name: chatViewModel.searchTerm}"
                        class="chat-friend">
                        <div ng-click="launchDialog(chatUser.layoutId)"
                             ng-if="chatUser.dialogType === dialogType.CHAT && chatUser.isConversation"
                             class="chat-friend-container">
                            <div class="avatar avatar-headshot-sm card-plain chat-friend-avatar">
                                <img ng-src="{{chatLibrary.friendsDict[chatUser.displayUserId].AvatarThumb.Url}}"
                                     class="avatar-card-image chat-avatar"
                                     thumbnail="chatLibrary.friendsDict[chatUser.displayUserId].AvatarThumb"
                                     image-retry
                                     ng-if="chatUser.isConversation">
                                <div class="avatar-status chat-friend-status" ng-class="userPresenceTypes[chatLibrary.friendsDict[chatUser.displayUserId].UserPresenceType]['className']"></div>
                            </div>
                            <div class="chat-friend-info">
                                <span class="text-overflow chat-friend-name" ng-if="chatUser.isConversation">{{chatUser.name}}</span>
                                <span class="small text-overflow chat-friend-message"
                                      ng-class="{'font-bold': chatUser.HasUnreadMessages}"
                                      ng-bind-html="chatUser.DisplayMessage.Content"
                                      ng-if="chatUser.DisplayMessage"></span>
                            </div>
                        </div>

                        <div ng-click="launchDialog(chatUser.layoutId)"
                             ng-if="chatUser.dialogType === dialogType.GROUPCHAT && chatUser.isConversation"
                             class="chat-friend-container chat-friend-groups">
                            <div class="chat-friend-avatar">
                                <ul class="avatar-group card-plain chat-avatar-groups"
                                    ng-class="{'avatar-double': chatUser.userIds.length == 2, 
                                                'avatar-triple': chatUser.userIds.length == 3, 
                                                'avatar-all': chatUser.userIds.length >= 4}">
                                    <li ng-repeat="userId in chatUser.userIds | limitTo : 4"
                                        class="avatar-item chat-avatar">
                                        <img ng-src="{{chatLibrary.friendsDict[userId].AvatarThumb.Url}}"
                                             thumbnail="chatLibrary.friendsDict[userId].AvatarThumb"
                                             class="avatar-card-image"
                                             image-retry>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-friend-info">
                                <span class="text-overflow chat-friend-name">{{chatUser.name}}</span>
                                <span class="small text-overflow chat-friend-message"
                                      ng-class="{'font-bold': chatUser.HasUnreadMessages}"
                                      ng-bind-html="chatUser.DisplayMessage.Content"
                                      ng-if="chatUser.DisplayMessage"></span>
                            </div>
                        </div>

                        <div ng-click="launchDialog(chatUser.layoutId)"
                             ng-if="chatUser.dialogType === dialogType.PARTY && chatUser.isConversation"
                             class="chat-friend-container">
                            <div class="chat-friend-avatar chat-party-avatar">
                                <span class="icon-chat-party-avatar"></span>
                            </div>
                            <div class="chat-friend-info">
                                <span class="text-overflow chat-friend-name">{{chatUser.name}}</span>
                                <span class="small text-overflow chat-friend-message"
                                      ng-class="{'font-bold': chatUser.HasUnreadMessages}"
                                      ng-bind-html="chatUser.DisplayMessage.Content"
                                      ng-if="chatUser.DisplayMessage"></span>
                            </div>
                        </div>
                        <div ng-click="launchDialog(chatUser.layoutId)"
                             ng-if="chatUser.dialogType === dialogType.PENDINGPARTY  && chatUser.isConversation"
                             class="chat-friend-container chat-pending-party">
                            <div class="chat-friend-avatar">
                                <ul class="avatar-group card-plain chat-avatar-groups"
                                    ng-class="{'avatar-double': chatUser.userIds.length == 1, 
                                                'avatar-triple': chatUser.userIds.length == 2, 
                                                'avatar-all': chatUser.userIds.length >= 3}">
                                    <li ng-repeat="userId in chatUser.userIds | limitTo : 3"
                                        class="avatar-item chat-avatar">
                                        <img ng-src="{{chatLibrary.friendsDict[userId].AvatarThumb.Url}}"
                                             thumbnail="chatLibrary.friendsDict[userId].AvatarThumb"
                                             class="avatar-card-image"
                                             image-retry>
                                    </li>
                                    <li class="chat-avatar-party-icon">
                                        <span class="icon-chat-party-avatar"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-friend-info">
                                <span class="text-overflow chat-friend-name">{{chatUser.name}}</span>
                                <span class="small text-overflow chat-friend-message party-pending-msg"
                                      ng-if="chatUser.incomingPartyInvite">{{chatUser.pendingPartyMsg}}</span>
                                <span class="small text-overflow chat-friend-message"
                                      ng-class="{'font-bold': chatUser.HasUnreadMessages}"
                                      ng-bind-html="chatUser.DisplayMessage.Content"
                                      ng-if="chatUser.DisplayMessage && !chatUser.incomingPartyInvite"></span>
                            </div>
                        </div>
                        <div ng-click="launchDialog(chatUser.layoutId)"
                             ng-if="!chatUser.isConversation"
                             class="chat-friend-container">
                            <div class="avatar avatar-headshot-sm card-plain chat-friend-avatar">
                                <img ng-src="{{chatUser.AvatarThumb.Url}}" class="avatar-card-image chat-avatar"
                                     thumbnail="chatUser.AvatarThumb"
                                     image-retry>
                                <div class="avatar-status chat-friend-status" ng-class="userPresenceTypes[chatUser.UserPresenceType]['className']"></div>

                            </div>
                            <div class="chat-friend-info">
                                <span class="text-overflow chat-friend-name">{{chatUser.name}}</span>
                                <span class="xsmall text-overflow chat-friend-message">{{userPresenceTypes[chatUser.UserPresenceType].title}}</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="chat-loading loading-bottom"
                     ng-show="chatLibrary.chatLayout.isChatLoading">
                    <img ng-src="{{chatLibrary.spinner}}" alt="loading ...">
                </div>
            </div>
        </div>
        <div id="chat-disconnect"
             class="chat-disconnect"
             ng-show="chatLibrary.chatLayout.errorMaskEnable || chatLibrary.chatLayout.pageDataLoading"
             ng-cloak>
            <p ng-show="chatLibrary.chatLayout.errorMaskEnable">Trying to connect ...</p>
            <img ng-src="{{chatLibrary.spinner}}" alt="loading ...">
        </div>
        <div id="chat-empty-list"
             class="chat-disconnect"
             ng-hide="chatLibrary.chatLayout.errorMaskEnable"
             ng-if="chatLibrary.chatLayout.chatLandingEnabled">
            <span class="icon-chat-friends"></span>
            <p class="text-lead">Make friends to start chatting and partying!</p>
        </div>
    </div>
</script>
    <div id="dialogs" class="dialogs ng-scope" ng-controller="dialogsController">
        <!-- ngRepeat: chatLayoutId in chatLibrary.layoutIdList -->
        <script type="text/ng-template" id="chat-abuse-report">
    <div class="dialog-report-container"
         ng-show="dialogLayout.isConfirmationOn">
        <div class="dialog-report-content">
            <h4>Continue to report?</h4>
            <button id="chat-abuse-report-btn"
                    class="btn-primary-xs"
                    ng-click="abuseReport(null, true)">
                Report
            </button>

            <button class="btn-control-xs"
                    ng-click="dialogLayout.isConfirmationOn = false">
                Cancel
            </button>
        </div>
    </div>
</script>

        <script type="text/ng-template" id="chat-friends-selection">
    <div class="chat-friends-container"
        ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.chatBodyHeight : ''">
        <div class="chat-search"
             ng-class="{'group-select-container' : dialogData.selectedUserIds.length > 0}"
             group-select>
            <div class="group-select">
                <ul class="group-select-friends">
                    <li class="small group-select-friend"
                        ng-repeat="userId in dialogData.selectedUserIds"
                        ng-click="selectFriends(userId)">
                        {{dialogData.selectedUsersDict[userId].Username}}
                        <span class="icon-chat-cancel-search group-select-cancel"></span>
                    </li>
                </ul>
                <input type="text"
                       placeholder="Search"
                       class="chat-search-input"
                       focus-me="{{dialogLayout.focusMeEnabled}}"
                       ng-model="dialogData.searchTerm" />
            </div>
            <button id="friends-selection-btn"
                    class="btn-fixed-width btn-secondary-xs friends-invite-btn"
                    ng-disabled="dialogLayout.inviteBtnDisabled"
                    ng-click="sendInvite()"
                    ng-bind="dialogData.dialogType == dialogType.NEWGROUPCHAT ? 'Create' : 'Add'">
            </button>
        </div>
        
        <div ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.friendsListStyle : ''">
            <div id="scrollbar_friend_{{dialogData.dialogType}}_{{dialogData.layoutId}}"
                 class="rbx-scrollbar chat-friend-list"
                 friends-lazy-load>
                <ul class="chat-friends">
                    <li ng-repeat="friend in chatLibrary.friendsDict | orderList: dialogData.friendIds  | filter: {Username: dialogData.searchTerm}"
                        class="chat-friend">
                        <div class="chat-friend-container chat-friend-select"
                             ng-click="selectFriends(friend.Id)">
                            <div class="avatar avatar-headshot-sm card-plain chat-friend-avatar">
                                <img ng-src="{{friend.AvatarThumb.Url}}"
                                     thumbnail="friend.AvatarThumb"
                                     image-retry
                                     class="avatar-card-image chat-avatar">
                                <div class="avatar-status chat-friend-status" ng-class="userPresenceTypes[friend.UserPresenceType]['className']"></div>
                            </div>
                            <div class="chat-friend-info">
                                <span class="text-overflow chat-friend-name">{{friend.Username}}</span>
                                <span class="small text-overflow chat-friend-message">{{userPresenceTypes[friend.UserPresenceType].title}}</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</script>
        <script type="text/ng-template" id="chat-dialog">
    <div id="dialog-container" class="dialog-container"
         ng-class="{'group-has-banner': dialogData.isPartyExisted || dialogData.partyInGame,
                    'dialog-party': dialogData.dialogType == dialogType.PARTY,
                    'collapsed': dialogLayout.collapsed && chatLibrary.deviceType === deviceType.COMPUTER,
                    'active': dialogLayout.active && !dialogLayout.hasFocus}"
         ng-controller="dialogController"
         ng-focus="focusDialog()">
        <div class="dialog-main">
            <div class="chat-windows-header dialog-header"
             ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.headerStyle : ''">
                <div class="chat-header-back"
                        ng-click="closeDialog(dialogData.layoutId)"
                        ng-show="chatLibrary.inApp && !chatLibrary.tabletInApp">
                    <span class="icon-chat-arrow-left"></span>
                </div>
                <div class="chat-header-label">
                    <span class="icon-chat-party-label"
                          ng-show="dialogData.dialogType == dialogType.PARTY"
                          title="Party"
                          ng-cloak></span>
                    <span id="chat-title"
                          class="text-overflow chat-header-title dialog-header-title"
                          ng-click="toggleDialogContainer()"
                          ng-if="dialogData.dialogType != dialogType.PARTY">
                        <a class="font-bold"
                           ng-click="linkToProfile($event)"
                           ng-class="{'disabled': chatLibrary.inApp}"
                           ng-href="{{dialogData.nameLink}}">{{dialogData.name}}</a>
                    </span>
                    <span id="party-title"
                          class="font-bold text-overflow chat-header-title dialog-header-title"
                          ng-click="toggleDialogContainer()"
                          ng-if="dialogData.dialogType == dialogType.PARTY">
                        {{dialogData.name}}
                    </span>
                </div>
                <div class="chat-header-action"
                     chat-setting>
                    <span class="icon-chat-close"
                          ng-click="closeDialog(dialogData.layoutId)"
                          ng-hide="chatLibrary.inApp"
                          data-toggle="tooltip"
                          title="Close"></span>
                    <span class="icon-chat-setting"
                          data-toggle="popover"
                          data-bind="group-settings-{{dialogData.Id}}"
                          ng-hide="(dialogLayout.collapsed && chatLibrary.deviceType === deviceType.COMPUTER) || chatLibrary.chatLayout.errorMaskEnable"></span>
                    <div class="rbx-popover-content" data-toggle="group-settings-{{dialogData.Id}}">
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a id="abuse-report"
                                   ng-click="abuseReport(dialogData.userIds[0], false)">Report Abuse</a>
                            </li>
                            <li>
                                <a id="leave-group"
                                   ng-click="leaveGroup()"
                                   ng-if="dialogData.dialogType === dialogType.PARTY">Leave Party</a>
                            </li>
                        </ul>
                    </div>
                    <span id="create-party"
                          class="icon-chat-party-label"
                          ng-click="sendInvite(dialogData.layoutId)"
                          data-toggle="tooltip"
                          title="Play Together"
                          ng-hide="dialogData.party || (dialogLayout.collapsed && chatLibrary.deviceType === deviceType.COMPUTER)  || chatLibrary.chatLayout.errorMaskEnable || chatLibrary.inApp"></span>
                </div>
            </div>

            <div id="dialog-member-header"
                 class="dialog-member-header"
                 ng-show="dialogData.isPartyExisted && !dialogData.partyInGame"
                 ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.bannerStyle : ''">
                <ul class="group-members">
                    <li class="avatar avatar-headshot-sm card-plain group-member"
                        title="{{chatLibrary.friendsDict[userId].Username}}{{dialogData.membersDict[userId].statusTooltip}}"
                        ng-repeat="userId in dialogData.userIds">
                        <img ng-src="{{chatLibrary.friendsDict[userId].AvatarThumb.Url}}"
                             thumbnail="chatLibrary.friendsDict[userId].AvatarThumb"
                             image-retry
                             alt="{{chatLibrary.friendsDict[userId].Username}}"
                             class="avatar-card-image group-member-avatar"
                             ng-class="{'group-leader': dialogData.membersDict[userId].memberStatus === memberStatus.LEADER,
                                        'group-pending':dialogData.membersDict[userId].memberStatus === memberStatus.PENDING}">
                    </li>
                </ul>
                <a id="find-game"
                   class="btn-primary-xs"
                   ng-show="dialogData.dialogType === dialogType.PARTY && dialogData.party.LeaderUser.Id === chatLibrary.userId"
                   ng-href="{{chatLibrary.gamesPageLink}}">Find Game</a>
                <a id="join-party"
                   class="btn-control-xs"
                   ng-hide="dialogData.dialogType === dialogType.PARTY || !dialogData.party"
                   ng-click="joinParty()">
                    Join Party
                </a>
            </div>

            <div id="party-ingame-header"
                 class="party-ingame-header"
                 ng-show="dialogData.dialogType === dialogType.PARTY && dialogData.isPartyExisted && dialogData.partyInGame"
                 ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.bannerStyle : ''">
                <img ng-src="{{dialogData.placeThumbnail.Url}}"
                     thumbnail="dialogData.placeThumbnail" image-retry
                     class="party-ingame-thumbnail">
                <div class="party-ingame-label"
                     ng-class="{'party-ingame-member': chatLibrary.userId !== dialogData.party.LeaderUser.Id}">
                    <span class="small">Playing</span>
                    <span class="small font-bold text-overflow party-ingame-name">{{dialogData.party.GameName}}</span>
                </div>
                <a id="join-game"
                   class="btn-control-xs"
                   ng-hide="chatLibrary.userId === dialogData.party.LeaderUser.Id"
                   ng-click="joinGame()">
                    Join Game
                </a>
            </div>
            <div id="scrollbar_{{dialogData.dialogType}}_{{dialogData.layoutId}}"
                 class="rbx-scrollbar dialog-body"
                 ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.dialogStyle : dialogLayout.defaultStyle.dialogStyle"
                 dialog-lazy-load>
                <ul class="dialog-messages">
                    <li class="dialog-message-container"
                        ng-repeat="message in dialogData.ChatMessages | reverse"
                        ng-class="{'message-inbound': message.SenderUserId != chatLibrary.userId && !message.isSystemMessage,
                                    'system-message': message.isSystemMessage,
                                    'message-cluster-master': message.isClusterMaster}">
                        <div class="text-date-hint" ng-hide="!message.displayTimeStamp">{{message.displayTimeStamp}}</div>
                        <div class="small dialog-message dialog-message-content dialog-triangle"
                             ng-bind-html="message.Content"
                             ng-hide="message.isSystemMessage"></div>
                        <div class="xsmall dialog-sending" ng-show="message.sendingMessage">Sending...</div>
                        <div class="xsmall text-error dialog-sending" ng-show="message.sendMessageHasError"
                             ng-bind="message.error || 'Error'"></div>
                        <span class="system-message-content"
                              ng-show="message.isSystemMessage"
                              ng-bind-html="message.Content"></span>
                    </li>
                </ul>
            </div>
            <div class="chat-loading loading-top"
                 ng-show="dialogLayout.isChatLoading">
                <img ng-src="{{chatLibrary.spinner}}" alt="loading ...">
            </div>
            <div class="dialog-input-container"
                ng-focus="toggleDialogFocusStatus(true)"
                ng-blur="toggleDialogFocusStatus(false)"
                ng-style="chatLibrary.inApp? dialogLayout.inAppStyle.inputStyle : dialogLayout.defaultStyle.inputStyle">
                <textarea id="dialog-input"
                          msd-elastic
                          focus-me="{{dialogLayout.focusMeEnabled}}"
                          placeholder="Send a message ..."
                          ng-model="dialogData.messageForSend"
                          key-press-enter="keyPressEnter($event)"
                          class="dialog-input"
                          maxlength="{{dialogLayout.limitCharacterCount}}"
                          ng-disabled="chatLibrary.chatLayout.errorMaskEnable"
                          ng-style="chatLibrary.inApp? dialogLayout.inAppStyle.inputStyle : dialogLayout.defaultStyle.inputStyle"></textarea>
                <button class="btn-secondary-sm message-send-btn"
                        ng-show="chatLibrary.inApp && dialogData.messageForSend && dialogData.messageForSend.length > 0"
                        remove-focus>
                    Send
                </button>
            </div>

            <div abuse-report></div>
        </div>
    </div>
</script>
        <script type="text/ng-template" id="chat-group-dialog">
    <div class="dialog-container group-dialog"
         ng-class="{'group-has-banner': dialogData.isPartyExisted || dialogData.partyInGame,
                    'dialog-party': dialogData.dialogType == dialogType.PARTY,
                    'collapsed': dialogLayout.collapsed && chatLibrary.deviceType === deviceType.COMPUTER,
                    'active': dialogLayout.active && !dialogLayout.hasFocus}"
         ng-controller="dialogController">
        <div class="dialog-main"
             ng-hide="dialogLayout.isConfirmationOn || dialogLayout.lookUpMembers || dialogData.addMoreFriends">
            <div class="chat-windows-header dialog-header"
                ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.headerStyle : ''">
                <div class="chat-header-back"
                        ng-click="closeDialog(dialogData.layoutId)"
                        ng-show="chatLibrary.inApp && !chatLibrary.tabletInApp">
                    <span class="icon-chat-arrow-left"></span>
                </div>
                <div class="chat-header-label">
                    <span class="icon-chat-party-label"
                          ng-show="dialogData.dialogType == dialogType.PARTY"
                          title="Party"
                          ng-cloak></span>
                    <span class="icon-chat-group-label"
                          ng-show="dialogData.dialogType != dialogType.PARTY"
                          title="Group Chat"
                          ng-cloak></span>
                    <span id="party-title"
                          class="font-bold text-overflow dialog-header-title"
                          title="{{dialogData.partyName}}"
                          ng-click="toggleDialogContainer()" ng-if="dialogData.dialogType == dialogType.PARTY">{{dialogData.partyName}}</span>
                    <span id="group-chat-title"
                          class="font-bold text-overflow dialog-header-title"
                          title="{{dialogData.groupName}}"
                          ng-click="toggleDialogContainer()" ng-if="dialogData.dialogType != dialogType.PARTY">{{dialogData.groupName}}</span>
                </div>
                <div class="chat-header-action"
                     chat-setting>
                    <span class="icon-chat-close"
                          ng-click="closeDialog(dialogData.layoutId)"
                          data-toggle="tooltip"
                          ng-hide="chatLibrary.inApp"
                          title="Close"></span>
                    <span class="icon-chat-setting"
                          data-toggle="popover"
                          data-bind="group-settings-{{dialogData.Id}}"
                          ng-hide="(dialogLayout.collapsed && chatLibrary.deviceType === deviceType.COMPUTER) || chatLibrary.chatLayout.errorMaskEnable"></span>
                    <div class="rbx-popover-content" data-toggle="group-settings-{{dialogData.Id}}">
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="add-friends" ng-click="addFriends()">Add Friends</a></li>
                            <li><a id="view-participants" ng-click="viewParticipants()">View Participants</a></li>
                            <li>
                                <a id="leave-group" ng-click="leaveGroup()" ng-bind="dialogData.dialogType === dialogType.PARTY ? 'Leave Party' : 'Leave Group'"></a>
                            </li>
                        </ul>
                    </div>
                    <span id="create-party"
                          class="icon-chat-party-label"
                          ng-click="sendInvite(dialogData.layoutId)"
                          data-toggle="tooltip"
                          title="Play Together"
                          ng-hide="dialogData.party || (dialogLayout.collapsed && chatLibrary.deviceType === deviceType.COMPUTER) || chatLibrary.chatLayout.errorMaskEnable || chatLibrary.inApp"></span>
                </div>
            </div>
            <div id="dialog-member-header"
                 class="dialog-member-header"
                 ng-show="dialogData.isPartyExisted && (!dialogData.partyInGame || dialogData.dialogType === dialogType.PENDINGPARTY)"
                 ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.bannerStyle : ''">
                <ul class="group-members">
                    <li class="avatar avatar-headshot-sm card-plain group-member"
                        title="{{chatLibrary.friendsDict[userId].Username}}{{dialogData.membersDict[userId].statusTooltip}}"
                        ng-repeat="userId in dialogData.userIds | limitTo: dialogLayout.limitMemberDisplay">
                        <img ng-src="{{chatLibrary.friendsDict[userId].AvatarThumb.Url}}"
                             thumbnail="chatLibrary.friendsDict[userId].AvatarThumb"
                             image-retry
                             alt="{{chatLibrary.friendsDict[userId].Username}}"
                             class="avatar-card-image group-member-avatar"
                             ng-class="{'group-leader': dialogData.membersDict[userId].memberStatus === memberStatus.LEADER,
                                        'group-pending':dialogData.membersDict[userId].memberStatus === memberStatus.PENDING}">
                    </li>
                    <li ng-show="dialogData.userIds.length === (dialogLayout.limitMemberDisplay + 1)"
                        title="{{chatLibrary.friendsDict[dialogData.userIds[dialogLayout.limitMemberDisplay]].Username}}{{dialogData.membersDict[dialogData.userIds[dialogLayout.limitMemberDisplay]].statusTooltip}}"
                        class="avatar avatar-headshot-sm card-plain group-member">
                        <img ng-src="{{chatLibrary.friendsDict[dialogData.userIds[dialogLayout.limitMemberDisplay]].AvatarThumb.Url}}"
                             thumbnail="chatLibrary.friendsDict[dialogData.userIds[dialogLayout.limitMemberDisplay]].AvatarThumb"
                             image-retry
                             alt="{{chatLibrary.friendsDict[dialogData.userIds[dialogLayout.limitMemberDisplay]].Username}}"
                             class="avatar-card-image group-member-avatar"
                             ng-class="{'group-pending': dialogData.membersDict[dialogData.userIds[dialogLayout.limitMemberDisplay]].memberStatus === memberStatus.PENDING}">
                    </li>
                    <li ng-show="dialogData.userIds.length > (dialogLayout.limitMemberDisplay + 1)"
                        ng-click="dialogLayout.lookUpMembers = !dialogLayout.lookUpMembers"
                        class="group-member group-member-plus"
                        ng-cloak>+{{dialogData.userIds.length - dialogLayout.limitMemberDisplay}}</li>
                </ul>
                <a id="find-game"
                   class="btn-primary-xs"
                   ng-show="dialogData.dialogType === dialogType.PARTY && dialogData.party.LeaderUser.Id === chatLibrary.userId && !chatLibrary.inApp"
                   ng-href="{{chatLibrary.gamesPageLink}}">Find Game</a>
                <a id="join-party"
                   class="btn-control-xs"
                   ng-hide="dialogData.dialogType === dialogType.PARTY || !dialogData.party"
                   ng-click="joinParty()">
                    Join Party
                </a>
            </div>

            <div id="party-ingame-header"
                 class="party-ingame-header"
                 ng-show="dialogData.dialogType === dialogType.PARTY && dialogData.isPartyExisted && dialogData.partyInGame"
                 ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.bannerStyle : ''">
                <img ng-src="{{dialogData.placeThumbnail.Url}}"
                     thumbnail="dialogData.placeThumbnail" image-retry
                     class="party-ingame-thumbnail">
                <div class="party-ingame-label"
                     ng-class="{'party-ingame-member': chatLibrary.userId !== dialogData.party.LeaderUser.Id}">
                    <span class="small">Playing</span>
                    <span class="small font-bold text-overflow party-ingame-name">{{dialogData.party.GameName}}</span>
                </div>
                <a id="join-game"
                   class="btn-control-xs"
                   ng-hide="chatLibrary.userId === dialogData.party.LeaderUser.Id"
                   ng-click="joinGame()">
                    Join Game
                </a>
            </div>
            <div id="scrollbar_{{dialogData.dialogType}}_{{dialogData.layoutId}}"
                 ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.dialogStyle : dialogLayout.defaultStyle.dialogStyle"
                 class="rbx-scrollbar dialog-body"
                 dialog-lazy-load>
                <ul class="dialog-messages">
                    <li class="dialog-message-container"
                        ng-repeat="message in dialogData.ChatMessages | reverse"
                        ng-class="{'message-inbound': message.SenderUserId != chatLibrary.userId && !message.isSystemMessage,
                                    'system-message': message.isSystemMessage,
                                    'message-cluster-master': message.isClusterMaster}">
                        <div class="text-date-hint" ng-hide="!message.displayTimeStamp">{{message.displayTimeStamp}}</div>
                        <a ng-href="{{chatLibrary.friendsDict[message.SenderUserId].UserProfileLink}}"
                           ng-click="goToProfile()"
                           ng-hide="message.isSystemMessage"
                           class="avatar avatar-headshot-sm dialog-message-avatar-link">
                            <img ng-if="message.SenderUserId != chatLibrary.userId"
                                 ng-src="{{chatLibrary.friendsDict[message.SenderUserId].AvatarThumb.Url}}"
                                 thumbnail="chatLibrary.friendsDict[message.SenderUserId].AvatarThumb"
                                 image-retry
                                 class="avatar-card-image dialog-message-avatar">
                        </a>
                        <div class="dialog-message dialog-triangle"
                             ng-hide="message.isSystemMessage">
                            <span ng-if="chatLibrary.friendsDict[message.SenderUserId]"
                                  ng-show="message.isClusterMaster && message.SenderUserId != chatLibrary.userId"
                                  class="xsmall dialog-message-author">{{chatLibrary.friendsDict[message.SenderUserId].Username}}</span>
                            <span class="small dialog-message-content" ng-bind-html="message.Content"></span>
                        </div>
                        <div class="xsmall dialog-sending" ng-show="message.sendingMessage">Sending...</div>
                        <div class="text-error dialog-sending" ng-show="message.sendMessageHasError"
                             ng-bind="message.error || 'Error'"></div>
                        <span class="system-message-content"
                              ng-show="message.isSystemMessage"
                              ng-bind-html="message.Content"></span>
                    </li>
                </ul>
            </div>
            <div class="chat-loading loading-top"
                 ng-show="dialogLayout.isChatLoading">
                <img ng-src="{{chatLibrary.spinner}}" alt="loading ...">
            </div>
            <div class="dialog-input-container"
                ng-style="chatLibrary.inApp? dialogLayout.inAppStyle.inputStyle : dialogLayout.defaultStyle.inputStyle">
                <textarea msd-elastic
                          focus-me="{{dialogLayout.focusMeEnabled}}"
                          ng-focus="toggleDialogFocusStatus(true)"
                          ng-blur="toggleDialogFocusStatus(false)"
                          placeholder="Send a message ..."
                          ng-model="dialogData.messageForSend"
                          key-press-enter="keyPressEnter($event)"
                          class="dialog-input"
                          maxlength="{{dialogLayout.limitCharacterCount}}"
                          ng-disabled="chatLibrary.chatLayout.errorMaskEnable"
                          ng-style="chatLibrary.inApp? dialogLayout.inAppStyle.inputStyle : dialogLayout.defaultStyle.inputStyle"></textarea>
                <button class="btn-secondary-sm message-send-btn"
                        ng-show="chatLibrary.inApp && dialogData.messageForSend && dialogData.messageForSend.length > 0"
                        remove-focus>
                    Send
                </button>
            </div>
        </div>
        <div class="group-members-container"
             ng-show="dialogLayout.lookUpMembers">
            <div class="chat-windows-header"
                ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.headerStyle : ''">
                <div class="chat-header-back"
                        ng-click="viewParticipants()">
                    <span class="icon-chat-arrow-left"></span>
                </div>
                <div class="chat-header-label">
                    <span class="font-bold">Participants</span>
                </div>
            </div>
            <div id="group-members" class="rbx-scrollbar chat-friend-list"
                ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.chatBodyHeight : ''">
                <ul class="chat-friends">
                    <li ng-repeat="userId in dialogData.userIds"
                        class="chat-friend">
                        <div class="chat-friend-container">
                            <div class="avatar avatar-headshot-sm card-plain chat-friend-avatar">
                                <img ng-src="{{chatLibrary.friendsDict[userId].AvatarThumb.Url}}"
                                     thumbnail="chatLibrary.friendsDict[userId].AvatarThumb"
                                     image-retry
                                     class="avatar-card-image chat-avatar">
                                <div class="avatar-status chat-friend-status" ng-class="userPresenceTypes[chatLibrary.friendsDict[userId].UserPresenceType]['className']"></div>
                            </div>
                            <div class="chat-friend-info">
                                <span class="text-overflow chat-friend-name">{{chatLibrary.friendsDict[userId].Username}}</span>
                                <span class="small" ng-show="dialogData.party && dialogData.membersDict[userId].memberStatus == memberStatus.LEADER">Leader</span>
                                <span class="small" ng-show="dialogData.party && dialogData.membersDict[userId].memberStatus == memberStatus.MEMBER">In party</span>
                            </div>
                            <div class="group-member-action">
                                <span ng-if="chatLibrary.userId != userId && chatLibrary.userId === dialogData.party.LeaderUser.Id && dialogData.dialogType == dialogType.PARTY"
                                      class="icon-chat-remove"
                                      ng-click="removeMember(userId)"></span>
                                <span ng-if="chatLibrary.userId != userId && chatLibrary.userId === dialogData.InitiatorUser.Id && dialogData.dialogType != dialogType.PARTY"
                                      class="icon-chat-remove"
                                      ng-click="removeMember(userId)"></span>
                                <span class="icon-chat-report-person"
                                      ng-if="chatLibrary.userId != userId"
                                      ng-click="abuseReport(userId, false)"></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div abuse-report></div>
        <div class="group-friends-container"
             ng-show="dialogData.addMoreFriends">
            <div class="chat-windows-header"
                ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.headerStyle : ''">
                <div class="chat-header-back"
                        ng-click="dialogData.addMoreFriends = false">
                    <span class="icon-chat-arrow-left"></span>
                </div>
                <div class="chat-header-label">
                    <span class="font-bold">Add Friends</span>
                    <span class="font-bold"
                          ng-class="{'group-overload': dialogLayout.isMembersOverloaded}">
                        ({{(dialogData.numberOfSelected)}}/{{chatLibrary.quotaOfPartyMembers}})
                    </span>
                </div>
            </div>
            <div friends-selection
                 class="friends-selection-container"></div>
        </div>
    </div>
</script>

        <!-- ngIf: newGroup --><div dialog="" id="newGroup" dialog-data="newGroup" chat-library="chatLibrary" close-dialog="closeDialog('newGroup')" send-invite="sendInvite(newGroup.layoutId)" ng-if="newGroup" class="ng-scope ng-isolate-scope"></div><!-- end ngIf: newGroup -->
        <script type="text/ng-template" id="chat-new-group">
    <div class="dialog-container group-create-container"
         ng-class="{'collapsed': dialogLayout.collapsed && chatLibrary.deviceType === deviceType.COMPUTER}"
         ng-controller="friendsController">
        <div class="chat-windows-header"
            ng-style="chatLibrary.inApp ? dialogLayout.inAppStyle.headerStyle : ''">
            <div class="chat-header-back"
                    ng-click="closeDialog(dialogData.layoutId)"
                    ng-show="chatLibrary.inApp">
                <span class="icon-chat-arrow-left"></span>
            </div>
            <div class="chat-header-create-group chat-header-label"
                 ng-click="toggleDialogContainer()">
                <span class="font-bold">{{dialogLayout.title}}</span>
                <span class="font-bold"
                      ng-class="{'group-overload': dialogLayout.isMembersOverloaded}">
                    ({{(dialogData.numberOfSelected)}}/{{chatLibrary.quotaOfPartyMembers}})
                </span>
            </div>
            <div class="chat-header-action">
                <span class="icon-chat-close"
                      ng-click="closeDialog(dialogData.layoutId)"
                      ng-hide="chatLibrary.inApp"
                      data-toggle="tooltip"
                      title="Close"></span>
            </div>
        </div>
        <div friends-selection></div>
    </div>
</script>
        <script type="text/ng-template" id="chat-dialog-minimize">
    <div id="dialogs-minimize-container"
         class="dialogs-minimize-container"
         ng-show="hasMinimizedDialogs"
         data-toggle="popover"
         data-bind="dialogs">
        <span class="icon-chat-minimize"></span>
        <span class="minimize-count">{{chatLibrary.minimizedDialogIdList.length}}</span>
        <div class="rbx-popover-content" data-toggle="dialogs">
            <ul class="dropdown-menu minimize-list" role="menu">
                <li ng-repeat="dialogLayoutId in chatLibrary.minimizedDialogIdList"
                    class="minimize-item"
                    id="{{dialogLayoutId}}"
                    minimize-item>
                    <a class="text-overflow minimize-title">
                        <span>
                            {{chatLibrary.minimizedDialogData[dialogLayoutId].name}}
                        </span>
                    </a>
                    <span class="icon-chat-cancel-search minimize-close"></span>
                </li>
            </ul>
        </div>
    </div>
</script>


        <div id="dialogs-minimize" class="dialogs-minimize ng-isolate-scope" dialog-minimize="" chat-library="chatLibrary">
    <div id="dialogs-minimize-container" class="dialogs-minimize-container ng-hide" ng-show="hasMinimizedDialogs" data-toggle="popover" data-bind="dialogs" data-original-title="" title="">
        <span class="icon-chat-minimize"></span>
        <span class="minimize-count ng-binding">0</span>
        <div class="rbx-popover-content" data-toggle="dialogs">
            <ul class="dropdown-menu minimize-list" role="menu">
                <!-- ngRepeat: dialogLayoutId in chatLibrary.minimizedDialogIdList -->
            </ul>
        </div>
    </div>
</div>
        <div class="chat-placeholder ng-scope" chat-placeholder="">
    <div class="chat-placeholder-container ng-hide" ng-show="chatLibrary.chatPlaceholderEnabled">
        <div class="chat-placeholder-header" ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.headerStyle : ''"></div>
        <span class="icon-chat-placeholder"></span>
    </div>
</div>
        <script type="text/ng-template" id="chat-placeholder">
    <div class="chat-placeholder-container"
         ng-show="chatLibrary.chatPlaceholderEnabled">
        <div class="chat-placeholder-header"
             ng-style="chatLibrary.inApp ? chatLibrary.inAppLayout.headerStyle : ''"></div>
        <span class="icon-chat-placeholder"></span>
    </div>
</script>

    </div>

    <script type="text/javascript">
        $(function () {
            // Because of placeLauncher.js, has to add this stupid global "play_placeId"
            $(document).on('Roblox.Chat.PartyInGame', function (event, args) {
                play_placeId = args.placeId;
            });
        });
    </script>

</div>
                <?php
            } else if($which == "JS_2")
            {
                ?>
                
    
    
    <script type="text/javascript" src="/js/jquery/jquery-1.11.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="/js/jquery/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
       
<script type='text/javascript' src='//js.rbxcdn.com/74b3a61e84d476a876d7c93e0880bf85.js.gzip'></script>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link href="https://images.rbxcdn.com/9c0e562131139fc909c6fbb3d691c249.ico.gzip" rel="icon">

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
</script>



<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    
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
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : '//www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>


            <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("https://ecsv2.<?php echo $url; ?>/www/e.png",
                    "https://ecsv2.<?php echo $url; ?>/www/e.png",
                    "https://ecsv2.<?php echo $url; ?>/pe?t=studio",
                    "https://ecsv2.<?php echo $url; ?>/pe?t=diagnostic");
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
Roblox.Endpoints.Urls['/api/item.ashx'] = 'https://www.<?php echo $url; ?>/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.<?php echo $url; ?>/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.<?php echo $url; ?>/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.<?php echo $url; ?>/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.<?php echo $url; ?>/game/';
Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'https://www.<?php echo $url; ?>/game-auth/getauthticket';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.<?php echo $url; ?>/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'https://assetgame.<?php echo $url; ?>/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.<?php echo $url; ?>/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.<?php echo $url; ?>/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.<?php echo $url; ?>/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.<?php echo $url; ?>/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.<?php echo $url; ?>/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.<?php echo $url; ?>/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'https://www.<?php echo $url; ?>/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.<?php echo $url; ?>/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.<?php echo $url; ?>/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'https://www.<?php echo $url; ?>/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'https://www.<?php echo $url; ?>/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.<?php echo $url; ?>/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'https://www.<?php echo $url; ?>/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.<?php echo $url; ?>/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.<?php echo $url; ?>/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.<?php echo $url; ?>/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.<?php echo $url; ?>/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.<?php echo $url; ?>/catalog/lists.aspx';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.<?php echo $url; ?>/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.<?php echo $url; ?>/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.<?php echo $url; ?>/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.<?php echo $url; ?>/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.<?php echo $url; ?>/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.<?php echo $url; ?>/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.<?php echo $url; ?>/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.<?php echo $url; ?>/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.<?php echo $url; ?>/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'https://www.<?php echo $url; ?>/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'https://www.<?php echo $url; ?>/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.<?php echo $url; ?>/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.<?php echo $url; ?>/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.<?php echo $url; ?>/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.<?php echo $url; ?>/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.<?php echo $url; ?>/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.<?php echo $url; ?>/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.<?php echo $url; ?>/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.<?php echo $url; ?>/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.<?php echo $url; ?>/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.<?php echo $url; ?>/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.<?php echo $url; ?>/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.<?php echo $url; ?>/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.<?php echo $url; ?>/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.<?php echo $url; ?>/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.<?php echo $url; ?>/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.<?php echo $url; ?>/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.<?php echo $url; ?>/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.<?php echo $url; ?>/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.<?php echo $url; ?>/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.<?php echo $url; ?>/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.<?php echo $url; ?>/api/friends/declinefriendrequest';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>
                <?php
            } else if($which == "PlaceLauncherPanel")
            {
                echo '<div id="PlaceLauncherStatusPanel" style="display:none;width:300px"
                data-new-plugin-events-enabled="True"
                data-event-stream-for-plugin-enabled="True"
                data-event-stream-for-protocol-enabled="True"
                data-is-game-launch-interface-enabled="True"
                data-is-protocol-handler-launch-enabled="True"
                data-is-user-logged-in="'.$loggedin3.'"
                data-os-name="Windows"
                data-protocol-name-for-client="s16rev-player-s16rev"
                data-protocol-name-for-studio="s16rev-studio-s16rev"
                data-protocol-url-includes-launchtime="true"
                data-protocol-detection-enabled="true">
               <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
                   <div id="Spinner" class="Spinner" style="padding:20px 0;">
                       <img src="//images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" />
                   </div>
                   <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
                       <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                           Starting Roblox...
                       </div>
                       <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
                       <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
                   </div>
                   <div style="text-align:center;margin-top:1em">
                       <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel" />
                   </div>
               </div>
           </div>';
            }
        }
    }
?>