<?php
$data=["ariel","girig","david"];

$musisi=implode("\n",$data); //array->string

echo $musisi;

$musisi_arr=explode("\n",$musisi); //string->array

print_r($musisi_arr);
// adding element
array_push($data,"gesang");

array_unshift($data,"rosa");

print_r($data);

// remove element
array_pop($data);//remove element form end

array_shift($data);//remove element form beginning

unset($data[0]);//remove element array index [0]

print_r(array_values($data));//return all array

// from team tree house

$color = array("red","green","blue");

array_unshift($color,"yellow");//add yellow to beginning array

array_push($color,"black");//add black to the end of array

array_push($color,1,1,"magenta");//replace red to magenta

unset($color[2]);//remove element from green

print_r($color);

$input = array("red","green","blue","yellow");
array_splice($input,1,4,"orange");
var_dump($input);
// ================================================
$icecream=[
    "alena"=>"black chery",
    "treasure"=>"chocolate",
    "dave"=>"cocies and cream",
    "rialla"=>"strowbery"
];

print_r($icecream);