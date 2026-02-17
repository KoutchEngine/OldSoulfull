<?php
include 'C:/wamp64/www/configuration/global.php';
$aaid = @$_GET["assetId"];
$w = @$_GET["width"];
$h = @$_GET["height"];
$form = @$_GET["format"];
function yousuck() {
    http_response_code(400);
    exit();
}
if(!isset($aaid) || !isset($w) || !isset($h) || !isset($form)) {
    yousuck();
}
$assetId = (int)$aaid;
$width = (int)$w;
$height = (int)$h;
if($assetId <= 0 || $width <= 0 || $height <= 0) {
    yousuck();
}
$allowedforms = [
    "png",
	"jpg",
	"jpeg",
	"tga"
];
//if(!array_search(@strtolower($form), $allowedforms)) {
  if(($i = array_search(@strtolower($form), $allowedforms)) === false) {
	yousuck();
}
$place = $site->getPlace($assetId);
if(isset($place)) {
    $thingolingo = $roblox->renderGame($assetId, $w, $h, $form, false);
    if(isset($thingolingo)) {
        header("Content-Type: image/{$form}");
        echo $thingolingo;
    } else {
        echo "Failed to render";
        exit();
    }
} else {
    echo "No such place";
    yousuck();
}
?>