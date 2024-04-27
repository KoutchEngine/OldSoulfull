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
            global $site;

            $loggedin = false;
            if(isset($_COOKIE['_ROBLOSECURITY']))
            {
                $query = "SELECT * FROM users WHERE authticket=:ticket";
                $usercheck = $db->prepare($query);
                $usercheck->execute(['ticket' => htmlspecialchars(filter_var($_COOKIE['_ROBLOSECURITY']))]);
                $usercheck = $usercheck->fetch();

                if($usercheck) {
                    $user = $usercheck;
                    $loggedin = true;
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
            
            if($which == "Navigation")
            {
                echo '<div id="header" class="navbar-fixed-top rbx-header" role="navigation">
    <div class="container-fluid">
        <div class="rbx-navbar-header">
            <div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
                    <span class="icon-nav-menu"></span>

                <div class="notification-red " title="25">
                    25
                </div>

            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="http://www.'.$url.'/">
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
            <span class="xsmall nav-setting-highlight ">1</span>
        </a>
        <div class="rbx-popover-content" data-toggle="popover-setting">
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a class="rbx-menu-item" href="https://www.'.$url.'/my/account">
                        Settings
                        <span class="xsmall nav-setting-highlight ">1</span>
                    </a>
                </li>
                <li><a class="rbx-menu-item" href="https://www.'.$url.'/Help/Builderman.aspx" target="_blank">Help</a></li>
                <li><a class="rbx-menu-item" data-behavior="logout" data-bind="http://www.'.$url.'/authentication/logout">Logout</a></li>
            </ul>
        </div>
    </li>
    <li class="navbar-icon-item">
        <a id="nav-robux-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-robux" data-original-title="" title="">
            <span class="icon-nav-robux" id="nav-robux"></span>
            <span class="rbx-text-navbar-right" id="nav-robux-amount">629</span>
        </a>
        <div class="rbx-popover-content" data-toggle="popover-robux">
            <ul class="dropdown-menu" role="menu">
                <li><a href="https://www.'.$url.'/My/Money.aspx#/#Summary_tab" id="nav-robux-balance" class="rbx-menu-item">629 ROBUX</a></li>
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
</div>';
            } else if ($which == "Footer")
            {
                echo '<footer class="container-footer">
                <div class="footer">
                    <ul class="row footer-links">
                            <li class="col-4 col-xs-2 footer-link">
                                <a href="http://corp.'.$url.'" class="text-footer-nav roblox-interstitial" target="_blank">
                                    About Us
                                </a>
                            </li>
                            <li class="col-4 col-xs-2 footer-link">
                                <a href="http://corp.'.$url.'/jobs" class="text-footer-nav roblox-interstitial" target="_blank">
                                    Jobs
                                </a>
                            </li>
                        <li class="col-4 col-xs-2 footer-link">
                            <a href="http://blog.'.$url.'" class="text-footer-nav" target="_blank">
                                Blog
                            </a>
                        </li>
                        <li class="col-4 col-xs-2 footer-link">
                            <a href="http://corp.'.$url.'/parents" class="text-footer-nav roblox-interstitial" target="_blank">
                                Parents
                            </a>
                        </li>
                        <li class="col-4 col-xs-2 footer-link">
                            <a href="http://en.help.'.$url.'/" class="text-footer-nav roblox-interstitial" target="_blank">
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
                        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a target="_blank" href="http://corp.'.$url.'" class="text-link roblox-interstitial">ROBLOX Corporation</a>, ©2016.
                        Patents pending. ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K\'\Nex, and no resemblance to the products of these companies is intended.
                        Use of this site signifies your acceptance of the <a href="https://www.'.$url.'/info/terms-of-service" target="_blank" class="text-link">Terms and Conditions</a>.
                    </p>
                </div>
            </footer>';
            }
        }
    }
?>