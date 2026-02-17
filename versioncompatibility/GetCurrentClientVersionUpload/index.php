<?php
    header("Content-Type: application/json");
    $apiKey = @$_GET['apiKey'];
    $binaryType = @$_GET['binaryType'];

    if($apiKey == "76e5a40c-3ae1-4028-9f10-7c62520bd94f") {
        if($binaryType == "WindowsPlayer") {
            $version = "version-Player18";
        } else if ($binaryType == "WindowsStudio") {
            $version = "version-Studio18";
        }
    }

    if(@$version == "") {
        exit(http_response_code(401));
    }

    exit('"'.$version.'"');
?>