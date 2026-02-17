<?php
    include_once 'C:\wamp64\www\configuration\database.php';
    include_once 'C:\wamp64\www\configuration\main.php';
    $site = new Site();
    include_once 'C:\wamp64\www\configuration\roblox.php';
    $roblox = new Roblox();
    include_once 'C:\wamp64\www\configuration\Arbiter.php';
    $arbiter = new Arbiter();

    $suggest = null;
    
    if (isset($_GET['ticket'])) {
        $suggest = $_GET['ticket'];
    }

    if (isset($_POST['ticket'])) {
        $suggest = $_POST['ticket'];
    }
	
	if (!isset($_GET['local'])) {
        $local = 'false';
	}

    if (isset($suggest)) {
        $query = "SELECT * FROM users WHERE authticket=:ticket";
        $user = $db->prepare($query);
        $user->execute(['ticket' => $suggest]);
        $user = $user->fetch();
        if ($user) {
            setcookie('.ROBLOSECURITY', $user['authticket'], time() + (10 * 365 * 24 * 60 * 60), "/", "assetgame.".$url);
            setcookie('.ROBLOSECURITY', $user['authticket'], time() + (10 * 365 * 24 * 60 * 60), "/", ".".$url);
        } else {
          http_response_code(403);
          exit("nouser");
        }
    } else {
        http_response_code(403);
        exit("noticket");
    }

    $place = $site->getPlace(@$_GET['placeId']);

    if($place) {
        $game = $site->getGame(@$place["gameId"]);
        if($game && $game['year'] != $year) {
            http_response_code(403);
            exit("invalidyear");
        }
        $jobId = @$roblox->JobExistsForPlace($place['id'])['jobid'];
        if(!$jobId) {
            $jobResult = $roblox->startServer($place['id'], $place['gameId'], false, false, rand(1500, 1575));
            if($jobResult) {
                $jobId = $jobResult;
            } else {
                http_response_code(400);
                exit("noserver");
            }
        }
    } else {
        http_response_code(400);
        exit("noplace");
    }
?>
{"status":2,"joinScriptUrl":"https://assetgame.<?= $url ?>/Game/Join.ashx?local=<?= @$_GET['local']; ?>&jobId=<?= $jobId; ?>&placeId=<?= $place['id']; ?>","authenticationUrl":"https://assetgame.<?= $url ?>/Login/Negotiate.ashx","authenticationTicket": "","jobId": "<?= $jobId; ?>","message":"Success"}