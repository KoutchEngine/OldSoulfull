
<?php
 include 'C:/xampp/htdocs/configuration/global.php';
 $site->LoginState(false, false);
if(isset($_GET['MaxRows']))
{
    $maxrows = (int)$_GET['MaxRows'];
    $howmany = 0;
    $query = "SELECT * FROM `games` WHERE 1";
    $allgames = $db->prepare($query);
    $allgames->execute();
    $allgames = $allgames->fetchAll();
    foreach($allgames as $game)
    {
        $howmany = $howmany + 1;
        if($howmany == $maxrows + 1)
        {
            break;
        }
        $place = $site->getPlace($game['startPlace']);
        $creator = $site->getUser($place['creatorId']);
        $render = base64_encode($roblox->renderGame($game['startPlace'], 150, 150));
 ?>
 <li class="list-item game-card">
    <div class="game-card-container">
        <a href="https://www.<?php echo $url; ?>/games/refer?TimeFilter=0&amp;GenreFilter=0&amp;PlaceId=<?php echo $place['id']; ?>&amp;Position=1&amp;PageType=GameSearch" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="data:image/png;base64,<?php echo $render; ?>" alt="<?php echo $place['gamename']; ?>" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t1.rbxcdn.com/03e7f2cb71971aeaaec6b13ba56ce364&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="<?php echo $place['gamename']; ?>" ng-non-bindable>
            <?php echo $place['gamename']; ?>
            </div>
            <div class="game-card-name-secondary">
                0 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="0" data-downvotes="0">
                        <div class="vote-background "></div>
                        <div class="vote-percentage"></div>
                        <div class="vote-mask">
                            <div class="segment seg-1"></div>
                            <div class="segment seg-2"></div>
                            <div class="segment seg-3"></div>
                            <div class="segment seg-4"></div>
                        </div>
                    </div>
                    <div class="vote-thumbs-down">
                        <span class="icon-thumbs-down"></span>
                    </div>
                </div>
                <div class="vote-counts">
                    <div class="vote-down-count">0</div>
                    <div class="vote-up-count">0</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://www.<?php echo $url; ?>/users/<?php echo $creator['id']; ?>/profile"><?php echo $creator['username']; ?></a>
    </span>
    </div>
</li>
<?php
    }
}
?>