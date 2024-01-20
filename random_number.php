<?php
//random number create.


$number = range(40,72);
$random = mt_rand(0,32);
// echo $random;

$luck = $number[$random];
if($luck % 2 ==0){
    echo <<<EOD
    head
    none head
    coma
EOD;//double coutession ("") use na kore <<<EOD___code type___EOD; use kora jay.
}else{
    echo "trail";
}