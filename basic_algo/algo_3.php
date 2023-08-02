<?php
/*
3. Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
Sample Input:
30, 0
25, 5
20, 30
20, 25
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false) 
*/

function bool($a, $b){
    $sum = $a + $b;
    return ($a == 30 || $b == 30 || $sum == 30);
}

echo var_dump(bool(30, 0)); // true
echo "<br />";
echo var_dump(bool(25, 5)); // true
echo "<br />";
echo var_dump(bool(20, 30)); // true
echo "<br />";
echo var_dump(bool(20, 25)); // false