<?php
$data_siswa=[];

while(true)
{
    // data siswa
    $siswa=&$data_siswa;
    
    // banner
    tampil("data siswa magang TOP");
    tampil("=====================");
    // menu aplikasi

    // user input data siswa magang
    $input_siswa=readline("masukkan data siswa ? ");
    if(!preg_match("/^[A-z]*$/",$input_siswa))
    {
        echo "Oops! input tidak valid...!\n";
        continue;
    }
    // simpan data siswa
    $siswa[]=$input_siswa;
    // munculkan data siswa
    $nomor= 1;
    
    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }
    // tanya user untuk memasukkan data lagi
    // $tanya=readline("tambah data ?");
    // if ($tanya=="no")
    // {
    //     tampil("terimakasih");
    //     break;
    // }
        tanyauser();
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}
// ========================

// output kan (copy dari komenan di atas)
function tanyauser()                    
{                                       
    $tanya=readline("tambah data (yes/no)?");
    if ($tanya=="no" || $tanya!=="yes") 
    {                                   
        tampil("terimakasih");          
        exit;                           
    }                                   
}                                       





function menuaplikasi()
{
    $data=["input data","update data","delete data","lihat data"];
    $nomor=1;
    foreach ($data as $key)
    {

    }
}

