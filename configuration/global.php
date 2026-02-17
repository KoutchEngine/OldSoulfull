<?php
    // Site Flags

    if (!isset($FlagsToReplace)) {
        $FlagsToReplace = [];
    }
    
    $Flags = [
        "Directory" => 'C:/wamp64/www/',
        "SetAccessHeaders" => true,

    ];
    
    foreach ($FlagsToReplace as $Flag => $Value) {
        if( !isset($Flags[$Flag]) || $Flags[$Flag] != $Value )
        {
            $Flags[$Flag] = $Value;
        }
    } 

    function IsFlagTrue($Name = "")
    {
        global $Flags;
        if( !isset($Flags[$Name]) || $Flags[$Name] != true )
        {
            return false;
        } else {
            return true;
        }
    }

    function IsFlagFalse($Name = "")
    {
        global $Flags;
        if( !isset($Flags[$Name]) || $Flags[$Name] != false)
        {
            return false;
        } else {
            return true;
        }
    }

    if( IsFlagTrue("SetAccessHeaders") )
    {
        header('Access-Control-Allow-Origin: https://www.limrev.one');
        header('Access-Control-Allow-Credentials: true');
    }

    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }

    include_once 'database.php';
    include_once 'XSSProtect.php';

    if(!isset($DontIncludeMain)) {
        include_once 'main.php';
        $site = new Site();
    }

    if(!isset($DontIncludeRoblox)) {
        include_once 'Arbiter.php';
        $arbiter = new Arbiter();
        
        include_once 'roblox.php';
        $roblox = new Roblox();
    }

    if(!isset($DontIncludeLogin)) {
        include_once 'Login.php';
        $Login = new Login();
    }
?>