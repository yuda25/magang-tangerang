<?php
// mengurutkan nama sesuai variabel
include 'siswa.php';

$value=[];

foreach($data_siswa as $key=>$result)
{
    $value[$key]=$result[0];
}

sort($value);
print_r($value);
// gettype($data_siswa);
// ===================================








?>
