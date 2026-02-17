<?php
    if(isset($_GET['id']))
    {
        $id = (int)$_GET['id'];

        if($id == 1 || $id == 4)
        {
            exit('{"Success": true, "CanManage": true}');
        } else {
            exit('{"Success": true, "CanManage": false}');
        }
    } else {
        exit('{"Success": false, "CanManage": false}');
    }
?>