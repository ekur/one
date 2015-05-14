<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title></title>
 </head>
 <body>  
<form method="get">
    <p><select size="3">
    <option value="sum2">Количество четных слов</option>
    <option selected value="sum">Количество слов</option>
    <option value="rename">Замена</option>
      </select></p>
    <textarea name="comment" cols="30" rows="10" placeholder="Коментарий"></textarea> <br><br>
    <input type="submit" value="Отправить">
   </form>
<?php
   $input = '';
if (isset($_GET['sum2'])) {
    $input = $_GET['sum2'];
    if (isset($_GET['sum'])) {
    $input = $_GET['sum'];
if (isset($_GET['rename'])) {
    $input = $_GET['sumrename'];
    
if (isset($_GET['comment'])) {
    $input = $_GET['comment'];

    ?>
  </body>
</html>