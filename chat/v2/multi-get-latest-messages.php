<?php
    include 'C:/wamp64/www/configuration/global.php';
    header('Content-Type: application/json');
    $site->LoginState(false, true);
    if(isset($_GET['conversationIds']))
    {
        $ae = $_GET['conversationIds'];
        if($site->getChatByChatId($ae))
        {
            $chat = $site->getChatByChatId($ae);
        } else {
            exit();
        }
    } else {
        exit();
    }
?>
[
  {
    "conversationId": <?php echo $chat['chatid']; ?>,
    "chatMessages": [
      {
        "id": "3fa85f64-5717-4562-b3fc-2c963f66afa6",
        "senderType": "User",
        "sent": "2024-05-23T22:41:15.600Z",
        "read": true,
        "messageType": "PlainText",
        "decorators": [
          "string"
        ],
        "senderTargetId": 0,
        "content": "string",
        "link": {
          "type": "Game",
          "game": {
            "universeId": 0
          }
        },
        "eventBased": {
          "type": "SetConversationUniverse",
          "setConversationUniverse": {
            "actorUserId": 0,
            "universeId": 0
          }
        }
      }
    ]
  }
]