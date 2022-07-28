<?php 
//1

function arraySumV1($arr){

    $result=0;
    for ($i=0; $i<count($arr); $i++ ){
        $result += $arr[$i];
    }
    return  $result;
}

$arr_input = [1,7,8,10,11];

echo arraySumV1($arr_input);
echo PHP_EOL;

//2

function squarePattern($x){

        $temp="";
        for ($i=0; $i<=$x; $i++){
            for ($j=0; $j<=$x; $j++){
                if ($i == 0 || $i == $x ){
                    $temp = $temp."*";
                } else {
                    $temp = $temp."-";
                }
            }
            echo "\n";
            echo $temp;
            $temp=""; //for reset 
        }
    
    return "";
}

echo squarepattern(5);

function arraySumV2($arr){

    $result=0;
    for ($i=0; $i< count($arr); $i++){
        for ($j=0; $j < count($arr[$i]); $j++){
            $result += $arr[$i][$j];
        }
    }
    return "Hasilnya adalah ".$result;
}

$array2=[[1,1], [2,0], [11,1]];
echo arraySumV2($array2);
echo PHP_EOL;
// echo arraySumV1($arr_input);
// echo squarePattern(6);
// echo arraySumV2($array2);