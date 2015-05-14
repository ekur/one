
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
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
     array(
        'title' => 'Утконос обыкновенный',
        'price' => '666',
        'description' => 'Утка с носом',
        'category' => 'утки',
        'country' => 'Япония',
    ),
     array(
        'title' => 'Утконос обыкновенный',
        'price' => '666',
        'description' => 'Утка с носом',
        'category' => 'утки',
        'country' => 'Япония',
    ),
     array(
        'title' => 'Утконос обыкновенный',
        'price' => '666',
        'description' => 'Утка с носом',
        'category' => 'утки',
        'country' => 'Япония',
    ),
     array(
        'title' => 'Утконос обыкновенный',
        'price' => '666',
        'description' => 'Утка с носом',
        'category' => 'утки',
        'country' => 'Япония',
    ),

);

$firstArray = array_slice($products, 0, 2);
echo $firstArray;
$firstArray = array_slice($products, 2, 4);
echo $firstArray;
?>
<a href="/epic/page.php/?page=1">1</a>
<a href="/epic/page.php/?page=2">2</a>
<a href="/epic/page.php/?page=3">3</a>

</body>
</html>