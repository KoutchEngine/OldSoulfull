<?php
    include 'C:/wamp64/www/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    $arraything = array(
        "profileDetails" => []
    );

    $friens = $site->getFriends($user['id']);
    foreach($friens as $frien)
    {
        $arraything["profileDetails"][] = array(
            "userId" => $frien['id'],
            "names" => array(
                "username" => protecc($frien['username']),
                "combinedName" => protecc($frien['username'])
            ),
            "platformProfileId" => ""
        );
    };

    echo json_encode($arraything);
?>