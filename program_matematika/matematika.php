<?php

// Banner Aplikasi

echo "Aplikasi Operasi Hitung Matematika\n";

// User Pilih Menu

$menu=["Perkalian","Pengurangan"];


$berhenti=true;

while($berhenti)
{
    $nomor=1;
    foreach($menu as $data)
    {
        echo "$nomor.$data \n";
        $nomor++;
    }

    $pilih_menu=readline("Pilih sistem operasi :");

    if($pilih_menu==1)
    {
        // Fitur Perkalian
        

    }elseif($pilih_menu==2)
    {
        // Fitur Pengurang

       
    }else{

        // Jika tidak memilih menu yang tersedia

        echo "Anda tidak memilih operasi yang tersedia!!!";
        break;
    }



    // User Keluar

    $ulangi=readline("Ulangi Lagi : ");

    if($ulangi=="no")
    {
        $berhenti=false;
    }
}