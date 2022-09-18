<?php
/**
 * In Bảng Cửu Chương
 *
 */
?>
<?php /*
<table border="1" width="100%">
    <tr>
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<td>";
                for ($j = 1; $j <= 10; $j++){
                    echo $i." x ".$j." = ".$i*$j."<br/>";
                }
                echo "</td>";
            }
        ?>
    </tr>
    <tr>
        <?php
        for ($i = 6; $i <= 10; $i++) {
            echo "<td>";
            for ($j = 1; $j <= 10; $j++){
                echo $i." x ".$j." = ".$i*$j."<br/>";
            }
            echo "</td>";
        }
        ?>
    </tr>
</table>
*/

// Tối ưu code:
?>
<table border="1" width="100%">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if($i == 1 || $i == 6) {
            echo "<tr>";
        }
        echo "<td>";
        for ($j = 1; $j <= 10; $j++){
            echo $i." x ".$j." = ".$i*$j."<br/>";
        }
        echo "</td>";
        if($i == 5 || $i == 10) {
            echo "</tr>";
        }
    }
    ?>
</table>