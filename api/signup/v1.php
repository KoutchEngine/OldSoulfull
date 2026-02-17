<?php
    include 'C:/wamp64/www/configuration/global.php';
    // i hate this
    $inputstuff = file_get_contents("php://input");
    parse_str($inputstuff, $userinfo);

    if(isset($_COOKIE['_ROBLOSECURITY']))
    {
        header('HTTP/1.1 401 Unauthorized');
    } else {
        $query = "SELECT * FROM users WHERE username=:username";
        $usercheck = $db->prepare($query);
        $usercheck->execute(['username' => protecc(filter_var($userinfo['username']))]);
        $usercheck = $usercheck->fetch();

        if($usercheck) {
            header('HTTP/1.1 401 Unauthorized');
        } else {
            $userid = $site->createId();
            $query = "INSERT INTO `users`(`id`, `username`, `password`, `siteType`, `gamestatus`, `messagesenabled`, `inventoryprivate`, `gender`, `birthday`, `authticket`) VALUES (:id, :username, :password, '2016L', 'Online', 0, 0, :gender, :birthday, :ticket)";
            $authticket = bin2hex(random_bytes(30));
            $password = password_hash($userinfo['password'], PASSWORD_BCRYPT);
            $userquery = $db->prepare($query);
            $userquery->execute([
                'id' => $userid,
                'username' => protecc(filter_var($userinfo['username'])),
                'password' => $password,
                'gender' => $userinfo['gender'],
                'birthday' => $userinfo['birthday'],
                'ticket' => $authticket
            ]);
            setcookie('.ROBLOSECURITY', $authticket, time() + (10 * 365 * 24 * 60 * 60), "/", ".".$url);
            sleep(2);
        }
    }
?>