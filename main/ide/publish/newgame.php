<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(isset($_POST['name']) && isset($_POST['desc']))
        {
            $id = $site->createGame($_POST['name'], $_POST['desc'], $user);
            header('Location: ./editplace?placeId='.$id);
            die();
        }
    }
?>

<h1>Create a new game!</h1>
<form method="POST">
    <input name="name" placeholder="game name here.."><br>
    <input name="desc" placeholder="game desc here, make it look retro"><br>
    <input type="submit">
</form>