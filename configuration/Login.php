<?php
    class Login {
        private $loggedIn = false;
        private $loggedData = null;
        
        function __construct() {
            //:3
        }

        function IsUserLogged() {
            return $this->loggedIn;
        }

        function GetUserData() {
            return $this->loggedData;
        }

        function UpdateBadCode() {
            global $loggedinid;
            global $loggedin;
            global $user;

            if($this->loggedIn) {
                $loggedin = true;
                $user = $this->loggedData;
                $loggedinid = $user['id'];
            } else {
                $loggedin = false;
                $loggedinid = -1;
                $user = null;
            }
        }

        function Update() { //check main.php
            global $db;
            $query = "SELECT * FROM users WHERE authticket=:ticket";
            $usercheck = $db->prepare($query);
            $usercheck->execute(['ticket' => $_COOKIE['_ROBLOSECURITY']]);
            $usercheck = $usercheck->fetch();
            if($usercheck) {
                $this->loggedIn = true;
                $this->loggedData = $usercheck;
            } else {
                $this->loggedIn = false;
                $this->loggedData = null;
            }
            $this->UpdateBadCode();
            return !$usercheck == null;
        }

        function GetUserByNameAndPass($username, $password) {
            global $db;
            $query = "SELECT * FROM users WHERE username=:username";
            $usercheck = $db->prepare($query);
            $usercheck->execute(['username' => protecc(filter_var($username))]);
            $usercheck = $usercheck->fetch();
            if($usercheck && password_verify($password, $usercheck['password'])) {
                return $usercheck;
            } else {
                return null;
            }
        }
    };
?>