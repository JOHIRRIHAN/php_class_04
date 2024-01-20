<?php
$number = [1,2,8,9];

function sumOfValue($oldNumber=0, $newNumber){

    return $oldNumber+$newNumber;
}

$sum = array_reduce($number, "sumOfValue");
echo $sum;
echo "<br>";
echo count($number);