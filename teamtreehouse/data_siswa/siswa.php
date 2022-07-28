<?php
$data_siswa=[
    "Reyhan"=>["Muhammad Reyhan Rizki Ferdiyan","Bondowoso","24/05/2001","lulus"],
    "Bayu"=>["Raditya Fajar Bayu Pamungkas","Kendal","19/02/2003","belum lulus"],
    "Toba"=>["Toba Fathir Auladya","kendal","04/04/2005","belum lulus"],
    "Sudiyono"=>["Sudiyono","kendal","10/05/2004","belum lulus"],
    "Dellas"=>["Aodellas magosiang","Semarang","14/03/2004","belum lulus"],
    "Andika"=>["Reza Andika Pratama","Sukorejo","08/06/2004","belum lulus"],
    "Mastna"=>["Matsna Hidayatur Rochman","Magelang","01/05/2004","belum lulus"],
    "Munif"=>["Munif soleh","Magelang","18/01/2004","belum lulus"],
    "Rendi"=>["Rendi saputra","Magelang","01/04/2004","belum lulus"],
    "Yokepet"=>["Yosafat Restu Adi","Jepara"," 06/09/2003","belum lulus"],
    "Cihung"=>["Miftachul Rohman","Magelang","08/10/2003","belum lulus"],
    "Yuda"=>["Kusuma yuda mubarok","Sukorejo","25/07/2004","belum lulus"],
    "Akbar"=>["Muhammad akbar kurnia","Sukorejo","07/03/2004","belum lulus"],
    "Khanif"=>["Ahmad khaniful huda","Magelang","21/04/2002","belum lulus"],
    "Ferdi"=>["Muhammad ferdiansyah","Jepara","14/07/2003","belum lulus"],
    "Zanuk"=>["Muhammad Zainuddin Basyar","Jepara","30/09/2003","belum lulus"],
    "Reza"=>["Reza Aditya Pratama","Jepara","04/04/2004","belum lulus"],
    "Rimba"=>["Muhammad Rimba Abdillah","Jepara","02/07/2004","belum lulus"],
    "Ananag"=>["Anang Syah Amirul Haqim","Jepara","20/10/2003","belum lulus"],
    "Hidayat"=>["Reza Fatikhul Hidayat","Sukorejo","06/08/2004","belum lulus"],
    "Udin"=>["Khoirudin","Sukorejo","05/09/2003","belum lulus"],
];



$temp_arr=[];
$filter="Sukorejo";
$lulus="lulus";

foreach($data_siswa as $data)
{
    
    
        // echo $key[0].PHP_EOL;

        if($data[1]==$filter)
    {
        $temp_arr[]=[$data[0],$data[1],$data[2],$data[3]];
    }

    if($data[3]== $lulus)
    {
        $temp_arr[]=[$data[3]];
    }
}
    asort($temp_arr);

    print_r($temp_arr);
?>