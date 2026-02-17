<?php
    include 'C:/wamp64/www/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    $chatarray = array();

    $friens = $site->getChats($user['id']);
    foreach ($friens as $chat)
    {
        $frien = $site->getUser($chat['userid2']);
        $chatarray[] = array(
            'id' => $chat['chatid'],
            'title' => $frien['username'],
            'initiator' => array(
                'type' => 'User',
                'targetId' => $frien['id'],
                'name' => protecc($frien['username']),
                'displayName' => protecc($frien['displayname']),
                'hasVerifiedBadge' => 'false'
            ),
            'hasUnreadMessages' => 'false',
            'participants' => array(
                array(
                    'type' => 'User',
                    'targetId' => $frien['id'],
                    'name' => protecc($frien['username']),
                    'displayName' => protecc($frien['displayname']),
                    'hasVerifiedBadge' => 'false'
                ),
                array(
                    'type' => 'User',
                    'targetId' => $user['id'],
                    'name' => protecc($user['username']),
                    'displayName' => protecc($user['displayname']),
                    'hasVerifiedBadge' => 'false'
                )
            ),
            'conversationType' => 'OneToOneConversation',
            'conversationTitle' => array(
                'titleForViewer' => protecc($frien['username']),
                'isDefaultTitle' => true
            ),
            'lastUpdated' => '2024-05-23T22:11:57.898Z',
            'conversationUniverse' => array(
                'universeId' => 0,
                'rootPlaceId' => 0
            )
        );
    }

    echo json_encode($chatarray);
?>