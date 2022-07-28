<?php

// $data=[
//     ["kejuruan"=>["TKR"=>"Teknik Kendaraan Ringan"]],   
//     ["kejuruan"=>["RPL"=>"Rekayas Perangkat Lunak"]],   
//     ["kejuruan"=>["TKJ"=>"Teknik KOmputer Jaringan"]],
//     ["lulusan"=>["SMA"=>"Sekolah Menengah Atas"]]
// ];

// $temp_arr=[];
// // print_r($data);
// foreach($data as $key)
// {
//     // echo $key.PHP_EOL; 
//     // print_r($key);  
  
//     foreach($key as $key_x=>$value_x)
//     {
//         // echo $value_x.PHP_EOL;
//         foreach($value_x as $key_y=>$value_y)
//         {
//             // echo $key_x.$key_y.$value_y.PHP_EOL;//array tidak bisa di echo

//             $temp_arr[]=[$key_x,$key_y,$value_y];
//         }
//     }
// }
// print_r($temp_arr[0]);

// $temp_arr_kejuruan=[];

// foreach ($temp_arr as $key)
// {
//     // echo $key[0].PHP_EOL;
//     $temp_arr_kejuruan[]=$key[0];
// }

// print_r($temp_arr_kejuruan);

// ===================================
// $data=[
//     1,    //ordered
//     "sepuluh"=>10 //asosiatif
// ];

// echo $data[0];          //ordered
// echo $data["sepuluh"];  //asosiatif
// ====================================
$penjualan=array(
    "mebel"=>[
        ["meja"=>5],
        ["kursi"=>10],
        ["lemari"=>90]
    ],
    "perkakas"=>[
        ["palu"=>25],
        ["kampak"=>12],
        ["gergaji"=>10]
    ],
    "elektronik"=>[
        ["tv"=>100],
        ["ac"=>30],
    ]
    );

    // $temp_total=0;
    $temp_arr=[];
    foreach($penjualan as $key=>$key_b)
    {
        foreach ($key_b as $key_a)
        {
            foreach ($key_a as $value_C=>$jumlah)
            {
                $temp_arr[]=[$key,$value_C,$jumlah];
                // $temp_total+=$jumlah;
            }
        }
        // echo "total:".$temp_total.PHP_EOL;
    }
    print_r($temp_arr);