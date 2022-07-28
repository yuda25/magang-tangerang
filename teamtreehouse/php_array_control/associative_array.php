<?php
$data=[
    "name"=>"kusuma yuda",
    "age"=>16,
    "musician"=>true,
    "height"=>1.45,
    1=>"angka satu",
    false=>"benar",
    2.7=>"dua"
];

$task1=array(
    "title"=>"clean motorcycle",
    "priority"=>"medium",
    "complete"=>true
);

$task2=array(
    "title"=>"watch movie",
    "priority"=>"medium",
    "complete"=>false
);

$task3="all task was done";// string

$todo=array($task1,$task2,$task3);
echo $todo[0]["title"];
echo PHP_EOL;
echo $todo[2];
/**
 * https://teamtreehouse.com/library/multidimensional-arrays
 */

print_r($data);