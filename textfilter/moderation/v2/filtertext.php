<?php
  $text = @$_POST['text'];
?>
{ 
"success": true,
"message": "",
"data": { 
    "AgeUnder13":"<?php echo $text; ?>",
    "Age13OrOver":"<?php echo $text; ?>" 
  } 
}