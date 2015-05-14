<?php
<?php
$lines = file('orders.csv');
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . $line . "
<br />\n";
}