<?php
//global scope
/*
$name = "Earth";

function doSomething(){
    global $name;
    echo $name;
}
doSomething();
*/

$student = ["Rohim", "korim", "monir",123];
$n = count($student);

for($i = 0; $i < $n; $i++){
    // echo $student[$i]."\n";
}
for($i = $n-1; $i >= 0; $i--){
    echo $student[$i]."\n";
}

