<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    $site->LoginState(false, true);
?>
{
    "robux": <?php echo $user['robux']; ?>,
    "tickets": 0,
    "isMarketplaceEnabled": true,
    "isDeveloperProductPurchaseEnabled": true,
    "areInAppPurchasesEnabled": true
}