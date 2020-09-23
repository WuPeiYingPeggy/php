<?php
// 1. include 與require 都可以呼叫外部的php(類似複製貼上)
// 2. include_once 與 require_once 前面有執行過,就不會再執行
// 3. include不到會給警告,後面一樣會執行
//    require不到,程式就會當掉
  include("lib.php");
  include("lib.php");
  include_once("lib.php");
  include_once("lib.php");//盡量用include
  echo "flag 1<br>";
  include_once("libxxx.php");
  echo "flag 2<br>";
  require_once("libxxx.php");//require不到,程式就會當掉,後面不執行
  echo "flag 3<br>"; 

  // require("lib.php"); 

?>