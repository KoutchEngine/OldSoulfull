<?php
  if(isset($_POST['text']))
  {
    include 'C:/wamp64/www/configuration/XSSProtect.php';
    $uncensored = protecc($_POST['text']);
    $censored = filter($_POST['text']);
  } else {
    die('{"data": {"white": "", "black": ""}}'); 
  }
?>
{"data": {"white": "<?= $censored ?>", "black": "<?= $uncensored ?>"}}