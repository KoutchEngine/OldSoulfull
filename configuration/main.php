<?php
    $url = "limrev.one";
    $protocol = "https";
    $ip = "unknown+DN";
    $theme = "2016L";

    if(isset($_SERVER['HTTPS']))
    {
        $protocol = "https";
    }

    class Site {
        public function createId()
        {
            global $db;
            $idcheck = "SELECT * FROM ids WHERE 1";
            $id = $db->prepare($idcheck);
            $id->execute();
            $id = $id->fetchAll();
            $id = count($id) + 1;
            if($id == 156 || $id == 261)
            {
                $id = $id + 1;
            }
            
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

        public function getAllForums()
        {
            global $db;
            $query = "SELECT * FROM forums WHERE 1";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute();
            $gamescheck = $gamescheck->fetchAll();
            return $gamescheck;
        }

        public function getForum($id)
        {
            global $db;
            $query = "SELECT * FROM forums WHERE id=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }

        public function getAllForumThings($fid)
        {
            global $db;
            $query = "SELECT * FROM forumthings WHERE forumid=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $fid]);
            $gamescheck = $gamescheck->fetchAll();
            return $gamescheck;
        }

        public function getForumThing($id)
        {
            global $db;
            $id = (int)$id;
            $query = "SELECT * FROM forumthings WHERE thingid=:id";
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

        public function getUserByName($id)
        {
            global $db;
            $query = "SELECT * FROM users WHERE username=:name";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['name' => $id]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }
		

        public function getUserFromAuthTicket($ticket)
        {
            global $db;
            $query = "SELECT * FROM users WHERE authticket=:ticket";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['ticket' => $ticket]);
            $gamescheck = $gamescheck->fetch();
            return $gamescheck;
        }
		
		public function getCharApp($id)
        {
            global $db;
            $query = "SELECT * FROM charapp WHERE userid=:id";
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

        public function getFriends($id)
        {
            global $db;
            $friends = array();
            $query = "SELECT * FROM friends WHERE friendid=:id";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetchall();
            
            foreach($gamescheck as $user2)
            {
                if($user2['userid'] != $id)
                {
                    $friends[] = $this->getUser($user2['userid']);
                }
            }
            return $friends;
        }

        public function getChats($id)
        {
            global $db;
            $query = "SELECT * FROM chats WHERE userid=:id ORDER BY lastsenttime";
            $gamescheck = $db->prepare($query);
            $gamescheck->execute(['id' => $id]);
            $gamescheck = $gamescheck->fetchall();

            return $gamescheck;
        }

        public function getChatByChatId($id)
        {
            global $db;
            $query = "SELECT * FROM chats WHERE chatid=:id";
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
            return "";
        }

        public function getBrowserTrackerId($id)
        {
            return null;
        }

        public function IsMobile() {
            $wat = strtolower($_SERVER['HTTP_USER_AGENT']);
        
            return (strpos($wat, 'android') !== false ||
                    strpos($wat, 'mobile') !== false ||
                    strpos($wat, 'iphone') !== false);
        }
        

        public function getBrowserTrackerIdFromIp($ip)
        {
            return null;
        }

        public function createGame($name, $desc, $user)
        {
            global $db;
            global $roblox;

            $universeid = $this->createId();
            $placeid = $this->createId();

            file_put_contents('C:/wamp64/www/configuration/Assets/'.$placeid, file_get_contents('C:/wamp64/www/configuration/Assets/379736082')); //wat
            file_put_contents('C:/wamp64/www/configuration/Assets/'.$placeid.'-1', file_get_contents('C:/wamp64/www/configuration/Assets/379736082')); //wat
            
            $query = "INSERT INTO `games`(id, creatorid, startplace) VALUES (:uid, :cid, :pid)";
            $creategame = $db->prepare($query);
            $creategame->execute(['uid' => $universeid, 'cid' => $user['id'], 'pid' => $placeid]);
        
            $query = "INSERT INTO `places`(id, gamename, description, gameId, creatorId, placeVersion) VALUES (:pid, :gname, :gdesc, :uid, :cid, 1)";
            $createplace = $db->prepare($query);
            $createplace->execute([
                'pid' => $placeid,
                'gname' => protecc($name),
                'gdesc' => protecc($desc),
                'uid' => $universeid,
                'cid' => $user['id']
            ]);
        
            $query = "INSERT INTO `owneditems`(`userId`, `itemId`, `type`) VALUES (:uid, :pid, 'Place')";
            $ownitem = $db->prepare($query);
            $ownitem->execute(['uid' => $user['id'], 'pid' => $placeid]);

            $query = "INSERT INTO `owneditems`(`userId`, `itemId`, `type`) VALUES (:cid, :uid, 'Game')";
            $ownitem2 = $db->prepare($query);
            $ownitem2->execute(['cid' => $user['id'], 'uid' => $universeid]);
            
            $roblox->renderGame($placeid, 150, 150, "PNG", true); //wgat
            
            return $placeid;
        }

        public function invitekey()
        {
            global $user;
            global $loggedin;
            global $url;

            if($loggedin)
            {
                if($user['activated'] == 1 && $_SERVER['REQUEST_URI'] == "/invitekey/")
                {
                    exit(header('Location: http://www.'.$url.'/home'));
                }

                if($user['activated'] == 0 && $_SERVER['REQUEST_URI'] != "/invitekey/")
                {
                    exit(header('Location: http://www.'.$url.'/invitekey'));
                }
            }
        }

        public function LoginState($LoggedInRedirect, $NotLoggedInRedirect)
        {
            global $db;
            global $url;
            global $Login;

            if(isset($_COOKIE['_ROBLOSECURITY']))
            {
                $diditwork = $Login->Update();

                if($diditwork) {
                    if($LoggedInRedirect)
                    {
                        header('Location: http://www.'.$url.'/home');
                    } else if(!isset($_COOKIE['browserTrackerId'])) {
                        setcookie('browserTrackerId', "", time() + (10 * 365 * 24 * 60 * 60), '/', '.'.$url);   
                    }
                } else {
                    setcookie('.ROBLOSECURITY', '', time() - (10 * 365 * 24 * 60 * 60), '/', '.'.$url);
                    sleep(2);
                    if($NotLoggedInRedirect)
                    {
                        header('Location: http://www.'.$url);
                    }
                }
            } else if($NotLoggedInRedirect) {
                header('Location: http://www.'.$url);
            }
        }

        public function robloxHtml($which = "Navigation")
        {
            global $user;
            global $url;
            global $loggedin;
            global $loggedin3;
            global $theme;

            $loggedstuff = "";
            $loggedstuff2 = "";

            if($loggedin)
            {
                $loggedstuff = '<ul class="nav navbar-right rbx-navbar-icon-group">
                <li class="navbar-icon-item">
                    <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-setting" data-viewport="#header" data-original-title="" title="">
                        <span class="icon-nav-settings" id="nav-settings"></span>
                    </a>
                    <div class="rbx-popover-content" data-toggle="popover-setting">
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="rbx-menu-item" href="http://www.'.$url.'/my/account">
                                    Settings
                                </a>
                            </li>
                            <li><a class="rbx-menu-item" href="http://www.'.$url.'/Help/Builderman.aspx" target="_blank">Help</a></li>
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
                            <li><a href="http://www.'.$url.'/My/Money.aspx#/#Summary_tab" id="nav-robux-balance" class="rbx-menu-item">'.$user['robux'].' ROBUX</a></li>
                            <li><a href="http://www.'.$url.'/upgrades/robux?ctx=navpopover" class="rbx-menu-item">Buy ROBUX</a></li>
                        </ul>
                    </div>
                </li>
                <li class="rbx-navbar-right-search" data-toggle="toggle-search">
                    <a class="rbx-menu-icon rbx-menu-item">
                        <span class="icon-nav-search-white"></span>
                    </a>
                </li>
            </ul>';

            $loggedstuff2 = '<ul>
            <li class="text-lead">
                <a class="text-overflow" href="http://www.'.$url.'/users/'.$user['id'].'/profile">'.$user['username'].'</a>
            </li>
            <li class="rbx-divider"></li>
        </ul>';
            }

                /*
                notification:
                    <div class="notification-red " title="25">
                    25
                </div>
                notification (blue):
                    <span class="notification-blue " title="2">2</span>
                events stuff:
                 <li class="rbx-nav-sponsor" ng-non-bindable>
                            <a class="menu-item" href="http://www.'.$url.'/event/ImaginationEvent" title="ImaginationEvent">
                                    <img src="//images.rbxcdn.com/34fa904da537a1541d0e496967420a00" />
                            </a>
                        </li>
                */

                $memstat = "Anonymous";
                if($loggedin)
                {
                    $memstat = "Member";
                }

                $page = "Unknown";
                if( strpos($_SERVER['REQUEST_URI'], "home") ) //wat why
                {
                    // Funny JS Stuff. also accuracy
                    $page = "Home";
                }

                $thing = file_get_contents("C:/wamp64/www/configuration/SoulfullPages/".$theme."/".$which);
                $thing = str_replace("%ls2%", $loggedstuff2, $thing);
                $thing = str_replace("%ls%", $loggedstuff, $thing);
                $thing = str_replace("%url%", $url, $thing);
                $thing = str_replace("%userid", $user['id'], $thing);
                $thing = str_replace("%memberstat%", $memstat, $thing);
                $thing = str_replace("%page%", $page, $thing);

                echo $thing;
          }
    }
?>