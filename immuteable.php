<?php
$student = ["Rohim", "Korim", "Hanif", "Rahul"];
$student [1]="Karina";
$n = count($student);
for($i =0; $i <$n; $i++){
    // echo $student[$i]."\n";
}
$student= array_shift($student);
echo $student;

