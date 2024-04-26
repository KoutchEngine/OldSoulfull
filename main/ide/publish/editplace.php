<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['placeId']))
    {
        $placeid = (int)$_GET['placeId'];
        $query = "SELECT * FROM places WHERE id=:id AND creatorId=:cid";
        $gamescheck = $db->prepare($query);
        $gamescheck->execute(['id' => $placeid, 'cid' => $user['id']]);
        $gamescheck = $gamescheck->fetch();
        if($gamescheck)
        {

        } else {
            die();
        }
    } else {
        die();
    }
?>

<h2 id="publishmsg">uploading!</h2>

<script>
    var placeid = <?php echo (int)$_GET['placeId']; ?>;
    if(window.external.SaveUrl("http://data.s16rev.xyz/Data/Upload.ashx?assetId="+placeid)) {
        document.getElementById("publishmsg").textContent = "it published. congrats";
    } else {
        document.getElementById("publishmsg").textContent = "it didn't publish. congrats";
    }
</script>