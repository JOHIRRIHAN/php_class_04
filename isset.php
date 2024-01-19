<?php
$name = "hasan";
if(isset($name) && (is_numeric($name)) || $name != ''){
    echo "is set";
}else{
    echo "is not set";
}

$name = 12 ;

if(isset($name)){
    echo "is set";
}else{
    echo "is not set";
}

