
<?php
 include 'C:/xampp/htdocs/configuration/global.php';
 $site->LoginState(false, false);
if(isset($_GET['PlaceId']))
{
    $id = (int)$_GET['PlaceId'];
    $plac = $site->getPlace($id);
    header('Location: https://www.'.$url.'/games/'.$id.'/'.$plac['gamename']);
}
 ?>