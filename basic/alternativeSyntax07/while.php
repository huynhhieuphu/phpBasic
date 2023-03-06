<?php
/**
 * 4. Cú pháp thay thế while
 */

$i = 1;
while($i <= 5) {
    echo "Vòng lặp thứ $i <br>";
    $i++;
}

echo "<hr>";

$j = 1;
//thay thế
while($j <= 5):
    echo "Vòng lặp thứ $j<br>";
    $j++;
endwhile;