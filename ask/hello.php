<?php

// camel Case
// Pascal Case
// under score 

// menampilkan hello word
// echo "hello word";

// var_dump(1.2);
// var_dump(1==1);

// echo PHP_INT_MIN;
// echo PHP_INT_MAX;

// $nama='sumanto';

// echo 'nama kamu adalah '.$nama;
// seng ngisor karo seng nduwur podo wae
// echo "nama kamu adalah $nama \n";
// \n = br 
// echo "alamat bondowoso";

// $nama=["akbar","burhan","rizki"];
// echo $nama[0];


// echo "\n===========\n";
// $kusuma=["nama"=>"kusuma",
// "alamat"=>"sukorejo",
// "umur"=>19,
// "lulus"=>true
// ];
// echo $kusuma["nama"];
// var_dump($kusuma);
// function PanggilNama($data)
// {
//     echo "namamu adalah\n";
//     echo $data["nama"];
// };
// PanggilNama($kusuma);

// $jurusan="tkj";



// $t = "";
// // nek seng nduwur di otak atik ngko ngaruh
// if ($t=="tkj") {
//     echo "pay";
// } elseif ($t=="rpl") {
//     echo "paimen";
// }elseif ($t=="tkj") {
//     echo "paijo";
// }else {
//     echo "nolep";
// }
// echo "\n";




// for($mulai=1; $mulai<=10; $mulai++)
// {
//     echo $mulai."\n";
// }

// for($mulai=10; $mulai>=1; $mulai--)
// {
//     echo $mulai."\n";
// }


// for($mulai=1; $mulai<=10;  $mulai++)
// {
//     if($mulai==5){
//         echo "lima \n";
//     }else{
//         echo "$mulai \n";
//     }
// }



// // ===angka +7====
// for($mulai=7; $mulai<=30; $mulai+=7){
//     echo $mulai."\n";
// };



// buat kalender
    // for($A=1; $A<=30; $A++){
    //     for($B=1; $B<=30; $B+=7){
    //         if($A==$B){
    //             echo "\n";
    //         }
    //     }
    //         echo "$A\t";
    // } 



// satu baris di bawah ini untuk menampilkan hasil minus
    // for($c=-1;$c>=-30;$c--)
    // {
    //     echo $c;
    // }



// untuk nembuat angka 1-10 tapi yang di tampilkan cuma 1-5
    // for($p=1; $p<=10; $p++){
    //     echo("$p\n");
    //     if($p==5){
    //         break;
    //     }
    // }



    // untuk menghilangkan angka 6 8 10 dari angka 1-10
    // for($p=1; $p<=10; $p++){
            
    //         if($p==6||$p==8||$p==10){
    //             continue;
                
    //         }
    //         echo("$p\n");
    //     }



    $data_siswa=[
        "yuda"=>["kusuma yuda mubarok","sukorejo","25/07/2004",false],
        "reyhan"=>["Muhammad Reyhan Rizki Ferdiyan","Bondowoso","24/05/2001",true],
        "bayu"=>["Raditya Fajar Bayu Pamungkas","Kendal","19/02/2003",false],
        "toba"=>["Toba Fathir Auladya","kendal","04/04/2005",false],
        "sudiono"=>["sudiyono","kendal","10/05/2004",false],
        "delas"=>["aodellas magosiang","semarang","14/03/2004",false],
        "reza-gering"=>["Reza Andika Pratama","Sukorejo","08/06/2004", false],
        "masna"=>["Matsna Hidayatur Rochman","Magelang","01/05/2004",false],
        "munif"=>["Munif soleh","magelang","18/01/2004",false],
        "rendi"=>["Rendi saputra","magelang","01/04/2004",false],
        "yosafat"=>["Yosafat Restu Adi","Jepara","06/09/2003",False],
        "miftah"=>["Miftachul Rohman","Magelang","08/10/2003",false],
        "akbar"=>["muhammad akbar kurnia burhan","sukorejo","07/03/2004",false],
        "huda"=>["ahmad khaniful huda","magelang","21/04/2002",false],
        "ferdi"=>["muhammad ferdiansyah","Jepara","14/07/2003",false],
        "zanuk"=>["Muhammad Zainuddin Basyar","Jepara","30/09/2003",false],
        "reza-lantai-2"=>["Reza Aditya Pratama","Jepara","04/04/2004",false],
        "rimba"=>["Muhammad Rimba Abdillah","Jepara","02/07/2004",false],
       "anang"=>["Anang Syah Amirul Haqim","Jepara","20/10/2003",false],
        "reza-lemu"=>["Reza Fatikhul Hidayat","Sukorejo","06/08/2004",false],
        "udin"=>["Khoirudin","Sukorejo","05/09/2003",false]
    ];
    foreach($data_siswa as $key=>$value)
    {
        if($value[3]){
            echo "$value[0] \t sudah lulus \n";
        }
        else{
            echo "$value[0] \t belum lulus \n";
        }
    }

    ?>