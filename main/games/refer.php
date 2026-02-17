
<?php
 include 'C:/wamp64/www/configuration/global.php';
 $site->LoginState(false, false);
if(isset($_GET['PlaceId']))
{
    $id = (int)$_GET['PlaceId'];
    $plac = $site->getPlace($id);
    header('Location: http://www.'.$url.'/games/'.$id.'/'.$plac['gamename']);
}
 ?>