<?php

// $baru=["satu","dua","tiga","four"=>"empat"];
// echo $baru["four"];
// ===============================
// echo PHP_EOL;
// memunculkan value
// $nama="yuda";
// print_r($nama);
// ===============================
// echo PHP_EOL;
// $angka=[];
// $angka[]="satu";
// $angka["dua"]=2;

// $angka[0]="one"; //untuk memodifikasi/mengubah angka satu menjadi one tanpa mengubah value nya langsung
// var_dump($angka);
// array_push($angka,"tiga");//menambah pada akhir
// array_pop($angka);//angka terakhir yaitu 3 hilang
// array_shift($angka);//menghilangkan angka pertama
// array_unshift($angka,"zero");//menambahkan dari depan

// print_r($angka);
// ================================
$kata=["wifi!","mati!"];
$kata_s=implode("",$kata);
$kata_a=explode("",$kata_s);