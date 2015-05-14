<?php 
$mail="gjgjk@mail.ru";
$needle= '@';
 

$domen = strpos($mail,$needle);
$domen2=substr ($mail,$domen+1);
echo $domen2;
