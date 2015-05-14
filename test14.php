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
    echo $input;