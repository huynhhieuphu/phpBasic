<?php
/**
 * 3. Cú pháp thay thế for
 */
for($i = 1; $i <= 5; $i++) {
    echo "Vòng lặp thứ $i" . "<br>";
}

echo "<hr>";
//Thay thế
for($i = 1; $i <= 5; $i++):
    echo "Vòng lặp thứ $i" . "<br>";
endfor;