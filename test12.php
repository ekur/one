
<?php
$string = "Lorem ipsum Non eiusmod enim sint aute enim sint non voluptate";
$result = '';
foreach (explode(' ', $string) as $word) {
    $firstLetter = mb_substr($word, 0, 1);
    $lastLetter = mb_substr($word, -1);
    $middleLetters = mb_substr($word, 1, mb_strlen($word) - 1);
    $result .= $firstLetter . str_shuffle($middleLetters) . $lastLetter . ' ';
}
var_dump($result);