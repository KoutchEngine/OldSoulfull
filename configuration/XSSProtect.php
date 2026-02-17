<?php
  $badwords = array(
    "cock",
    "pussy",
    "dick",
    "d i c k",
    "c o c k",
    "a s s",
    "p u s s y",
    "di ck",
    "co ck",
    "as s",
    "pu ss y",
    "p ussy",
    "klan",
    "pu ssy",
    "as s",
    "a ss",
    "coc k",
    "asshole",
    "a sshole",
    "june 18th",
    "j une 18t h",
    "sex",
    "s e x",
    "se x",
    "s ex",
    "s4x",
    "f u c k",
    "fuck",
    "f uck",
    "fu ck",
    "f u ck",
    "fu c k",
    "penis",
    "p enis",
    "p e n i s",
    "pe nis",
    "pe n i s",
    "p e nis",
    "skibidi",
    "s k i b i d i",
    "ski bid i",
    "s k i bid i",
    "rizz",
    "r i z z",
    "ri zz",
    "r i zz",
    "ri z z",
    "r izz",
    "fanum tax",
    "gyatt",
    "gy att",
    "sigma",
    "si gma",
    "si g ma",
    "sig ma",
    "doutch",
    "skib|di"
  );
  
  function protecc($thing)
  {
    $newthing = filter_var(htmlspecialchars($thing));
    
    return htmlspecialchars_decode($newthing);
  }
  
  function filter($thing)
  {
    global $badwords;
    
    $newthing = protecc($thing);
    
    foreach($badwords as $badword)
    {
      $censor = "";
     
      for($i = 0; $i < strlen($badword); ++$i) {
        $censor .= "#";
      }
      
      $newthing = str_replace($badword, $censor, $newthing);
    }
    
    return $newthing;
  }
?>