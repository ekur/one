<?php

 
   $name ="jgt kjf jkl lkjs lkff ghghgh";
   $one=explode(" ",$name);
          function even($var) {
          return strlen($var)% 2==0;
}
 $sum = count (array_filter( $one, "even"));
 echo   $sum ;

         // выводм количество четных слов в строке ;
         // function even - условие по которому проходит сортировка массива
         // explode - разбиваем строку в массив по условию (пробел);