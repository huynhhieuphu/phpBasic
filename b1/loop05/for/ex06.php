<?php
/**
 * Vẽ tam giác sao với N dòng
 *
 * input: số dòng N
 * Ouput: Hiển thị tam giác (với số dòng)
 *
 */
$n = 5;

for($row = 1; $row <= $n; $row++){
    for ($col = 1; $col <= $row; $col++){
        if($col < $row){
            echo "* ";
        }else{
            echo "*";
        }
    }
    echo "<br>";
}

echo "<hr>";

/**
 * Vẽ tam giác đối xứng N x 2 dòng
 *
 */
$n = 5;

for($row = 1; $row <= $n; $row++){
    for ($col = 1; $col <= $row; $col++){
        if($col < $row){
            echo "* ";
        }else{
            echo "*";
        }
    }
    echo "<br>";
}

for($row = $n; $row >= 1; $row--){
    for ($col = 1; $col <= $row; $col++){
        if($col < $row){
            echo "* ";
        }else{
            echo "*";
        }
    }
    echo "<br>";
}

echo '<hr>';

/**
 * Vẽ tam giác số tăng dần với N dòng
 *
 */

$n = 5;
$count = 0;

for($row = 1; $row <= $n; $row++){
    for ($col = 1; $col <= $row; $col++){
        $count++;
        if($col < $row){
            echo $count . ' ';
        }else{
            echo $count;
        }

    }
    echo '<br>';
}