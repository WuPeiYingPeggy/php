<?php
  //gettype 可以查型態
  $x = 123;
  echo gettype($x), "<br>";
  
  $x = 123.0;
  echo gettype($x), "<br>";//double =>浮點數

  $x = "123.0";
  echo gettype($x), "<br>";
  
  $x = TRUE;
  echo gettype($x), "<br>";
  
?>
