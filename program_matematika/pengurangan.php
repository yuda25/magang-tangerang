<?php

$keluar=true;

while($keluar)
{
    //Aplikasi
    echo "========== aplikasi perhitungan =============== \n";


    //Terima input dari user

    $angka_pertama=readline("Masukkan angka pertama : ");
    $angka_kedua=readline("Masukkan angka kedua : ");

    //Validasi input

    if(!is_numeric($angka_pertama) || !is_numeric($angka_kedua))
    {
        echo "Maaf input hanya bisa angka !! \n";
        continue;
    };

    //Tampil hasil Perhitungan
    echo "\n Hasil dari $angka_pertama - $angka_kedua adalah : ".($angka_pertama-$angka_kedua)."\n";

    //Cek logika user untuk mengulangi

    $ulangi=readline("Ulangi lagi (yes/no) :");

    if($ulangi!=="yes" || $ulangi=="no"){
        $keluar=false;
    };
};