<?php
$fruits = ['Apple', 'Banana', 'orange', 'dated', 'mango'];
$random = ["a"=> 12, "b"=> 45, "c"=> 34, "d"=>22, "e"=>77];

$fruits1= array_slice($fruits,0,3);
$fruits2= array_slice($fruits,3);

$newFruits = array_merge($fruits1,$fruits2);
print_r($fruits1);
echo "<br>";
print_r($fruits2);
echo "<br>";
print_r($fruits);
echo "<br>";
print_r($random);

// $someOf = array_slice($fruits,3,-1);
// print_r($someOf);