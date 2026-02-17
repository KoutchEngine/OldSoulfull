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
  if(($i = array_search(@strtolower($form), $allowedforms)) === false) {
	yousuck();
}
$urlli = "https://".$url."/asset-thumbnail/image/?assetId=".$assetId."&width=".$width."&height=".$height."&format=".$form;
$outarray = array(
    "Url" => $urlli,
    "Final" => true,
    "SubstitutionType" => 0
);
echo json_encode($outarray);
?>