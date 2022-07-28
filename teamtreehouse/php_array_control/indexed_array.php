<?php
$data=["ariel","giring","david"];

$musisi=implode("\n",$data); //array -> string

echo $musisi;

$musisi_arr=explode("\n",$musisi); // string -> array

print_r($musisi_arr);