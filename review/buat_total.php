<?php

// $data=[
//     ["mie"=>12],
//     ["ayam"=>3],
//     ["minyak"=>4]
// ];

// $temp_total=0;
// foreach($data as $key)
// {
//     foreach($key as $key_x=>$value_x)
//     {
//         echo $key_x."\t".$value_x.PHP_EOL;
//         $temp_total+=$value_x;
//     }
// }
// echo "total:".$temp_total;

// =-============================-========
$data=[
    "snack"=>[
        ["kacang"=>10],
        ["mie"=>23],
        ["aqua"=>60]
    ],
    "perkakas"=>[
        ["palu"=>90],
        ["petik"=>12]
    ]
    ];

    foreach($data as $key=>$value)
    {
        $temp_total=0;
        echo $key.PHP_EOL;
        foreach($value as $key_x)
        {
            foreach($key_x as $key_y=>$value_y)
            {
                echo $key_y."\t".$value_y.PHP_EOL;
                $temp_total+=$value_y;
            }
        }
        echo "total:".$temp_total.PHP_EOL;
    }