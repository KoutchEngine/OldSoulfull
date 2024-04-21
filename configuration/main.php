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

        public function LoginState($LoggedInRedirect, $NotLoggedInRedirect)
        {
            global $db;
            global $user;
            global $url;
            $query = "SELECT * FROM users WHERE authticket=:ticket";
            $usercheck = $db->prepare($query);
            $usercheck->execute(['ticket' => htmlspecialchars(filter_var($_COOKIE['_ROBLOSECURITY']))]);
            $usercheck = $usercheck->fetch();

            if($usercheck) {
                $user = $usercheck;
                if($LoggedInRedirect)
                {
                    header('Location: https://www.'.$url.'/home');
                }
            } else {
                setcookie('.ROBLOSECURITY', 'no', 0, '/', '.'.$url);
                sleep(2);
                if($NotLoggedInRedirect)
                {
                    header('Location: https://www.'.$url);
                }
            }
        }

        public function robloxHtml($which)
        {
            global $user;
            if($which == "Navigation")
            {
                ?>
                <div id="header" class="navbar-fixed-top rbx-header" role="navigation">
    <div class="container-fluid">
        <div class="rbx-navbar-header">
            <div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
                    <span class="icon-nav-menu"></span>

                <div class="notification-red " title="25">
                    25
                </div>

            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="http://www.roblox.com/">
                    <span class="icon-logo"></span>
                    <span class="icon-logo-r"></span>
                </a>
            </div>
        </div>
        <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
            <li>
                <a class="nav-menu-title" href="https://www.roblox.com/games">Games</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.roblox.com/catalog">Catalog</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.roblox.com/develop">Develop</a>
            </li>
            <li>
                <a class="buy-robux nav-menu-title" href="https://www.roblox.com/upgrades/robux?ctx=nav">ROBUX</a>
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
                <li class="rbx-navbar-search-option selected" data-searchurl="https://www.roblox.com/games/?Keyword=">
                    <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Games</span>
                </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.roblox.com/search/users?keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in People</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.roblox.com/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Catalog</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.roblox.com/groups/search.aspx?val=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Groups</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.roblox.com/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
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
                    <a class="rbx-menu-item" href="https://www.roblox.com/my/account">
                        Settings
                        <span class="xsmall nav-setting-highlight ">1</span>
                    </a>
                </li>
                <li><a class="rbx-menu-item" href="https://www.roblox.com/Help/Builderman.aspx" target="_blank">Help</a></li>
                <li><a class="rbx-menu-item" data-behavior="logout" data-bind="http://www.roblox.com/authentication/logout">Logout</a></li>
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
                <li><a href="https://www.roblox.com/My/Money.aspx#/#Summary_tab" id="nav-robux-balance" class="rbx-menu-item">629 ROBUX</a></li>
                <li><a href="https://www.roblox.com/upgrades/robux?ctx=navpopover" class="rbx-menu-item">Buy ROBUX</a></li>
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
                <a class="nav-menu-title" href="https://www.roblox.com/games">Games</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.roblox.com/catalog/">Catalog</a>
            </li>
            <li>
                <a class="nav-menu-title" href="https://www.roblox.com/develop">Develop</a>
            </li>
            <li>
                <a class="buy-robux nav-menu-title" href="https://www.roblox.com/upgrades/robux?ctx=nav">ROBUX</a>
            </li>
        </ul><!--rbx-navbar-->
    </div>
</div>
                <?php
            }
        }
    }
?>