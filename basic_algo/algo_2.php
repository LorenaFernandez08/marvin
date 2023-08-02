<?php
/*
Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.

Sample Input:
53
30
51

Sample Output:
6
21
0
*/

function absolute_diff($n){
    $x = 51;
    return ($n > $x) ? abs($x - $n) * 3 : $x - $n;
}

echo absolute_diff(53);
echo "<br />";
echo absolute_diff(30);
echo "<br />";
echo absolute_diff(51);