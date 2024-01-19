<?php
$food = [
    'vegetable' => explode(',','brinjil, brocolli, carton, capsicam'),
    'fruits' => explode(',','orange, banana, apple'),
    'drinks' => explode(',','water, milk'),
];
print_r($food);
echo "<br>";
array_push($food['drinks'],'orange juice');

unset($food['vegetable']);
print_r($food);
echo "<br>";

// echo $food['vegetable'][0];

$person = ['fName'=> 'hello', 'lName'=> 'world'];
print_r($person);
echo "<br>";
unset($person['fName']);
print_r($person);
