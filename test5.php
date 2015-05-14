<?php

$products = array(
    array(
        'title' => 'Дикий кальмар',
        'price' => '100',
        'description' => 'Это же ДИКИЙ КАЛЬМАР!!!',
        'category' => 'кальмары',
        'country' => 'Китай',
    ),
    array(
        'title' => 'Енот с пулемётом',
        'price' => '150',
        'description' => 'пиу пиу',
        'category' => 'еноты',
        'country' => 'Австралия',
    ),
     array(
        'title' => 'Утконос обыкновенный',
        'price' => '666',
        'description' => 'Утка с носом',
        'category' => 'утки',
        'country' => 'Япония',
    ),
);
var_dump($products);
foreach ($products as $key=> $value) {
    echo $value['title']. '<br/>'; // Выодим проду
}