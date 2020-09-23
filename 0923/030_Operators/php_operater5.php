<?php
  $x = 1;
  $y = $x++; // $x = $x +1; ===> $x += 1;
  // $y = $x;
  // $x += 1;

  echo "x = $x, y = $y"; // x=2,y=1
  
  echo "<br>";

  $x = 1;
  $y = ++$x;
  echo "x = $x, y = $y";
?>
