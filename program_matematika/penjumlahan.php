
<?php
$keluar=true;

while($keluar)
{
    //banner aplikasi
    echo "aplikasi perhitungan !!!\n";

    //terima input dari user 

    $angka_pertama=readline("masukan angka pertama :");
    $angka_kedua=readline("masukan angka kedua :");
     
      //validasi kedua is numeric
      if(!is_numeric($angka_pertama) || !is_numeric($angka_kedua))
      {
          echo "maaf input hanya bisa angka !! \n";
          continue;
      }
     
  //tampil hasil perhitungan

     echo "\n hasil dari $angka_pertama + $angka_kedua adalah : ".($angka_pertama+$angka_kedua)."\n";

     //cek logika user untuk menglangi

    $ulangi=readline("ulangi lagi (yes/no) :");

    if($ulangi!=="yes" || $ulangi=="no"){
        $keluar=false;
    }
}
