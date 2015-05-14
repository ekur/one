<?php

 function sumname($name) {
  $sum= count (explode(" ",$name));
     return $sum;
 }
 
$name ="jgt kjf jkl lkjs lkff";
  $result = sumname($name);
  echo $result ;
  // подсчитываем колличество слов в строке name

  