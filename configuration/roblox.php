<?php
    $privatekey = file_get_contents('C:/xampp/htdocs/configuration/PrivateKeys_VERYVERYPRIVATE/PrivateKey.pem');
    
    class Roblox {
        public function getAsset($id)
        {
           /* if(file_exists('Assets/'.$id))
            {
                return file_get_contents('Assets/'.$id);
            } else {
                return file_get_contents('https://assetdelivery.roblox.com/v1/asset?id='.$id);
            }*/
            header('Location: https://assetdelivery.roblox.com/v1/asset?id='.$id);
        }

        public function sign($privatekey, $yodata)
        {
            openssl_sign($yodata, $newdata, $privatekey, OPENSSL_ALGO_SHA1);
            return $newdata;
        }
    }
?>