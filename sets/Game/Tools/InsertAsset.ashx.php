<?php
    if(isset($_GET['nsets']))
    {
        if (isset($_GET['userid'])) {
            $set = (int)$_GET['nsets'];
            $type = $_GET['type'];
            $uid = (int)$_GET['userid'];
            header('Location: https://sets.pizzaboxer.xyz/Game/Tools/InsertAsset.ashx?nsets='.$set.'&type='.$type.'&userid='.$uid);
        } else {
            $set = (int)$_GET['nsets'];
            $type = $_GET['type'];
            header('Location: https://sets.pizzaboxer.xyz/Game/Tools/InsertAsset.ashx?nsets='.$set.'&type='.$type);
        }
    } else if (isset($_GET['sid'])) {
        $id = (int)$_GET['sid'];
        header('Location: https://sets.pizzaboxer.xyz/Game/Tools/InsertAsset.ashx?sid='.$id);
    }
?>