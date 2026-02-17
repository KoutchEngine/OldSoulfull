<?php
    $e = @$_GET['keey'];
    if($e == "SUPERDUPERSE_CRETS16REVTHEN") {
        setcookie("_Key", "dr8a9gbSoulfullTesting__#7DABHGAag", time()+((60*60)*12), ".limrev.one");
        setcookie("_Key", "dr8a9gbSoulfullTesting__#7DABHGAag", time()+((60*60)*12), "limrev.one");
        setcookie("_Key", "dr8a9gbSoulfullTesting__#7DABHGAag", time()+((60*60)*12), "assetgame.limrev.one");
        sleep(2);
        header("Location: http://limrev.one");
    } else {
        die(http_response_code(403));
    }