<?php
$person = ['rohim', 'korim','jobbar','kasem', 'kawser','mahi','ratul','piya'];

function filterByName($name){
    return $name[0]=="r";
}
$newPerson = array_filter($person,"filterByName");
print_r($newPerson);