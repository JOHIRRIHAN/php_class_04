<?php

// loop preactice 


// for($i = 1; $i< 10; $i++){
//     // echo $i;
//     echo PHP_EOL;
//     for($star = 0; $star < $i; $star++){
//         echo "*";
//     }
// }

// 10 to 1 print 

// for($i = 0; $i <= 100; $i++){
//     echo $i % 7 == 0 ? $i."\n":'';
//     echo PHP_EOL;
// }

// while loop 

// $i = 10;
// while($i >= 0){
//     echo $i;
//     $i--;
// }
  

// break & continue

//  for($i = 0; $i <10; $i++){
//     echo $i;
//     echo PHP_EOL;
//     if($i == 5){
//         continue;
//     }
//  }

// for($i = 0; $i< 50; $i++){
//     if($i < 27){
//         echo $i;
//         echo PHP_EOL;
//    }
  
// }


// echo "<br>";
// echo "============\n";
// echo "<br>";



// for($i = 0; $i<= 5000; $i++){
//     if($i < 37){
//         continue;
//    }
//    echo $i;
//    echo PHP_EOL;
   
// }


// $var1 = 0;
// $var2 = 1;
// $var3 = 1;
// for($i = 0; $i < 10; $i++){
//     echo $var1. " ";
//     $var2 = $var3;
//     $var1 = $var2;
// }   $var3 = $var1 + $var2;

// even or odd number check function 

/*
function evenOrOdd($n){
    if($n % 2 == 0){
        return true;
    }else{
        return false;
    }
}

 $x = 12;
 if(evenOrOdd($x)){
    echo "{$x} id even number";
 }
 else{
    echo "{$x} is odd number";
 }
 */
/*
 function isEven($n){ //parameter
    if($n % 2 == 0){
        return true;
    }else{
        return false;
    }
 }

 $x = 500;
 if(isEven($x)){ // argument 
    echo "{$x} is even";
 }else{
    echo "$x} is even number";
 }
 */
/*
  function factorial($n){
    if(gettype($n)!="integer"){
        return "invalid";
    }
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
  }

$x=5;
echo "factorial of {$x} is".factorial($x);
*/

// default function 

function serve($foodType = "Coffee", $numberOfItem = "1 Cup"){
    // echo "{$numberOfItem} of {$foodType} has/ have been served"; 
}

//  function doTheLargestTask(){
//     echo "task a";
//  }
//  doTheLargestTask();


// counter function 
/*
function printNumber($counter, $end, $stepping=1){
    if($counter > $end){
        return;
    }
    echo $counter."\n";
    $counter+= $stepping;
    printNumber($counter, $end, $stepping);
}
// printNumber(10,50,3);


echo "<br>";
echo "<br>";


function printCounterNumber($start, $end, $count=1){
    if($start > $end){
        return;
    }
    echo $start."\n";
    $start +=$count;
    printCounterNumber($start, $end, $count);
}
printCounterNumber(1, 50,3);
*/
/*
function fibonacci($old, $new, $end){

    static $start;
    $start = $start  ?? 1;

    if($start> $end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);

}
fibonacci(0, 1, 50);
*/