<?php
/*
1. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
*/

function compute($num1, $num2){
    return $num1 == $num2 ? ($num1 + $num2) * 3 : $num1 + $num2;
}

print("Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
Sample Input <br /> <br />");

$num1 = rand(1, 10);
$num2 = rand(1, 10);

echo "num1 = $num1 <br />" . "num2 = $num2" . "<br /><br />";
echo compute($num1,$num2);