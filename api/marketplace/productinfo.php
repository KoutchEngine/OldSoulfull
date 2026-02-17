<?php
    include 'C:/wamp64/www/configuration/global.php';
    if(isset($_GET['assetId']))
    {
        $assetid = (int)$_GET['assetId'];
        $foundThing = false;

        if($site->getPlace($assetid))
        {
            $foundThing = $site->getPlace($assetid);
            $name = protecc($foundThing['gamename']);
            $assetid = $foundThing['id'];
            $creator = $site->getUser($foundThing['creatorId']);
        }

        if(!$foundThing) {
            exit('{}');
        }
    } else {
        exit('{}');
    }
?>
{
    "AssetId": <?php echo $assetid; ?>,
    "ProductId": 24870409,
    "Name": "<?php echo $name; ?>",
    "Description": "",
    "AssetTypeId": 8,
    "Creator": {
        "Id": <?php echo $creator['id']; ?>,
        "Name": "<?php echo protecc($creator['username']); ?>"
    },
    "IconImageAssetId": 0,
    "Created": "<?php echo $foundThing['createdTime']; ?>",
    "Updated": "<?php echo $foundThing['updatedTime']; ?>",
    "PriceInRobux": 0,
    "PriceInTickets": null,
    "Sales": 0,
    "IsNew": true,
    "IsForSale": false,
    "IsPublicDomain": false,
    "IsLimited": false,
    "IsLimitedUnique": false,
    "Remaining": null,
    "MinimumMembershipLevel": 0,
    "ContentRatingTypeId": 0
}