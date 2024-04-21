<?php
$user = "root";
$pass = "KOUTCHREV_PRIVATE_DONOT_TRY_TOACCESS_LOL_LOL_LOLLOL_LOL";
try {
    global $db;
    $db = new PDO('mysql:host=localhost;dbname=soulfulldbnew', $user, $pass);
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
}