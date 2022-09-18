<?php
/**
 * Vẽ bàn cờ vua
 *
 */
?>

<?php /*

<table width="100%" border="0" cellpadding="0" cellspacing="0">

    <tr>
        <td></td>
        <?php for ($alpha = 'a'; $alpha <= 'h'; $alpha++) { ?>
            <td style="height: 45px; text-align: center;"><?php echo $alpha ?></td>
        <?php } ?>
    </tr>

    <?php
        $numeric = 8;
        for($row = 1; $row <= 8; $row++) { ?>
        <tr>
            <td style="text-align: center"><?php echo $numeric ?></td>
            <?php for($col = 1; $col <= 8; $col++) { ?>
                <?php if($row % 2 != 0) { ?>
                    <?php if($col % 2 != 0) { ?>
                        <td style="width:12%; height: 100px; background-color: #fff;"></td>
                    <?php } else { ?>
                        <td style="width:12%; height: 100px; background-color: #000"></td>
                    <?php } ?>
                <?php } else { ?>
                    <?php if($col % 2 == 0) { ?>
                        <td style="width:12%; height: 100px; background-color: #fff;"></td>
                    <?php } else { ?>
                        <td style="width:12%; height: 100px; background-color: #000"></td>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </tr>
        <?php $numeric-- ?>
    <?php } ?>

</table>

*/

// tối ưu code:
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <?php
        $alphaLoop = null;
        for ($alpha = 'a'; $alpha <= 'h'; $alpha++) {
            $alphaLoop .= '<td style="height: 45px; text-align: center;">' . $alpha . '</td>';
        }
        echo "<tr><td></td>". $alphaLoop ."</tr>";

        $numeric = 8;
        for($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            echo "<td>" . $numeric ."</td>";
            for($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if($total % 2 == 0){
                    echo '<td style="width:12%; height: 100px; background-color: #fff;"></td>';
                }else{
                    echo '<td style="width:12%; height: 100px; background-color: #000;"></td>';
                }
            }
            echo "</tr>";
            $numeric--;
        }
    ?>
</table>