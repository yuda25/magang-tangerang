<?php

$data_siswa=[
    ["ahmad dhani","musisi"],
    ["vino ga bastian","artis"],
    ["luna maya","artis"],
    ["bambang pamungkas","atlit"],
    ["taufik hidayat","atlit"],
    ["jokowidodo","presiden"]
];

$temp_arr=[];
$filter="atlit";

foreach($data_siswa as $data)
{
    {
    
        // echo $key[0].PHP_EOL;

        if($data[1]==$filter)
        $temp_arr[]=[$data[0],$data[1]];
    }
}
    asort($temp_arr);

    print_r($temp_arr);