<?php
/**
 * 5. Cú pháp thay thế foreach
 */
$arr = ['item 1', 'item 2'];

foreach ($arr as $item ) {
    echo "$item <br>";
}

echo "<hr>";
// thay thế
foreach ($arr as $item ):
    echo "$item <br>";
endforeach;