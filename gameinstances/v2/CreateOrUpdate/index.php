<?php
file_put_contents("get.txt", json_encode($_GET));
file_put_contents("headers.txt", @json_encode(getallheaders()));
?>