<?php
$user = "root";
$pass = "S16R_PRIVAT_DONLEA_13K";
try {
    global $db;
    $db = new PDO('mysql:host=localhost;dbname=soulfulldbnew', $user, $pass);
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
}