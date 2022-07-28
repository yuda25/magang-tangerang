<?php


// aplikasi perhitungan\
$keluar=true;

while($keluar)
{
    // banner aplikasi
    echo "aplikasi pembagian !!!\n";

    // terima input dari user
    $angka_pertama=readline("masukkan angka pertama : ");
    $angka_kedua=readline("masukkan angka kedua : ");


    // falidasi input
    // // cara (untuk melarang huruf saja)[ora penting]
    // if(!(int)$angka_pertama  || !(int)$angka_kedua) //jika angka_pertama  angka
    // {
    //     echo "maaf input harus angka!! \n";
    // continue;
    // }

    // cara 1(unutuk melarang angka lalu lalu huruf)
    // if(!preg_match('/^[0-9]*$/',$angka_pertama)||(!preg_match('/^[0-9]*$/',$angka_kedua)))
    // {
    //     echo "maaf ndak iso nginput huruf \n";
    //     continue;
    // }

    // cara 2
    if(is_numeric($angka_pertama)==false || is_numeric($angka_kedua)==false){
        echo "maaf kami tidak bisa menerima input berupa huruf! \n";
        continue;
    }
    
    // ===============================================================

    // tampilan dari perhitungan
    echo "hasil dari $angka_pertama / $angka_kedua adalah :".($angka_pertama/$angka_kedua)."\n";

    // cek logika user untuk mengulangi
    $ulangi=readline("ulangi lagi (yes/no):\t");
    // logika 1
    if($ulangi=="yes")
    {
        $keluar=true;
    }elseif($ulangi=="no")
    {
        $keluar=false;
    }else{
    break;
    }
    
    
}



?>