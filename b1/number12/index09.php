<?php
// Định dạng số và làm tròn số theo hàm round()
var_dump(number_format(1000000));
// OUTPUT: string(9) "1,000,000"
echo '<br>';
var_dump(number_format(1000000.5));
// OUTPUT: string(9) "1,000,001"
echo '<br>';
var_dump(number_format(1000000.375, 1, ',', '.'));
// OUTPUT: string(11) "1.000.000,3"
echo '<br>';
var_dump(number_format(1000000.375, 2, ',', ' '));
// OUTPUT: string(11) "1 000 000,3"
echo '<br>';