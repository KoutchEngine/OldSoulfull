<?php
// thx unknown+DN
include 'C:/wamp64/www/configuration/global.php';
$site->LoginState(false, true);
header("content-type: application/xml");
error_reporting(0);
if(isset($_GET['method']))
{
    $method = $_GET['method'];
    $userid = 0;
    $groupid = 0;
    if(isset($_GET['playerid']))
    {
        $userid = (int)$_GET['playerid'];
    }
    if(isset($_GET['groupid']))
    {
        $groupid = (int)$_GET['groupid'];
    }
    $user = $site->getUser($userid);
    switch($method) {
        case "IsFriendsWith":
            die('<Value Type="boolean">false</Value>');
            break;
        case "IsBestFriendsWith":
            die('<Value Type="boolean">false</Value>');
            break;
        case "IsInGroup":
            $isingroup = "false";
            if($groupid == 1200769 && $user != null)
            {
                if($user['admin'] || $user['id'] == 4)
                {
                    $isingroup = "true";
                }
            } else if ($groupid == 2649054 && $user != null)
            {
                // epic minigames
                if($user['id'] == 1)
                {
                    $isingroup = "true";
                }
            }
            die('<Value Type="boolean">'.$isingroup.'</Value>');
            break;
        case "GetGroupRank":
            die('<Value Type="integer">0</Value>');
            break;
        case "GetRankInGroup":
            $rank = 0;
            if($groupid == 2649054 && $user != null)
            {
                // epic minigames
                if($user['id'] == 1)
                {
                    $rank = 255;
                }
            }
            die('<Value Type="integer">'.$rank.'</Value>');
            break;
        case "GetGroupRole":
            die('');
            break;
    };
}
?>