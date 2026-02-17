<?php
file_put_contents("heyyou".rand(1,9999999).".txt", json_encode($_GET));
?>

{"status": "success"}