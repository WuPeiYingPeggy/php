<?php
  //gettype() ==>可以查看類型

  // $x = getdate();             //陣列型態
  // echo gettype($x), "<br>";
  // print_r($x);               
  
  $x = date('Y-m-d H:i:s');      //字串型態
  echo $x, "<br>";
  echo gettype($x), "<br>";    
  
  // $x = gmdate('Y-m-d H:i:s');  //字串型態
  // echo $x, "<br>";
  // echo gettype($x), "<br>";
  
  // $x = strtotime(gmdate('Y-m-d H:i:s')); //$x = strtotime("2020-09-23 00:00:00");
  // echo $x, "<br>";
  // echo gettype($x), "<br>";
  
?>