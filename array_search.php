<?php
$fruits = ['Apple', 'Banana', 'orange', 'dated', 'mango'];

$search = array_search('mango',$fruits);
// echo $search;

// array walk

$number = [1,2,3,4,5,6,7,8,9];

function square($n){
    printf("Square of  %d is %d <br>",$n, $n*$n);
}
array_walk($number, "square");