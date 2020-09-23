<?php
  $x = 3;
  if ($x >= 10 && foo())//&&(and)  foo()不會執行  -邏輯判斷-
    echo "yes";         
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo()) //& foo()會執行  -運算<3+5>-
    echo "yes";       
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>