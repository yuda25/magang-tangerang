<?php
// untuk mambalikkan kata

// $magang="magang di TOP,joss";

// balikKata($magang);

// function balikKata($magang)
// {
//     echo strrev($magang);
// }

// ==========================
// return function (basic)
// function printStringReturnNumber()
// {
//     return true;
// }
// var_dump(printStringReturnNumber());

// if(printStringReturnNumber())
// {
//     echo "function ini mrngembalikan";
// }
// ==========================
// return function (basic)
// function panggilnama()
// {
//     return "yuda";
// }
// var_dump(panggilnama());
// // return function dadi siji
// if(panggilnama()=="yuda")
// {
//     echo "yuda";
// }else
// {
//     echo "bukan saya";
// }
// ======================
//  function printStringReturnNumber()
//   {
//     echo "welcome";
//     return 1;
//   }

//   $my_num = printStringReturnNumber();
//   echo $my_num;
//   echo printStringReturnNumber();
//   ============================

// return exit program
// function tesnama()
// {
//     if(true)
//     {
//         echo "kode ini di eksekusi\n";
//         return true;
//     }
//     echo "apakah kode ini akan di eksekusi?";
// }

// tesnama();
// ===================================
// itung itungan
// function calculateArea($y,$m)
// {
//   return $m*$y;
// }
//   echo calculateArea(4,2);
// echo "\n";
//   function calculateArea1($a,$w)
//   {
//     return $a/$w;
//   }
//     echo calculateArea1(4,2);
//   echo"\n";
//     function calculateArea2($height,$width,$depth,$dll)
//     {
//         return $height+$width+$depth+$dll;
//     }
//     echo calculateArea2(4,3,2,1);
//     echo "\n";
  //  // echo calculateArea(4,2)+calculateArea2(4,3,2,1);
    // function total($calculateArea,$calculateArea2)
    // {
    //     return $calculateArea+$calculateArea2;
    // }
    // echo total(calculateArea(4,2),calculateArea2(4,3,2,1));
// ====================================
    // menampilkan nama
// if(panggilnama()=="reyhan")
// {
//     echo "mas reyhan";
// }

//     function panggilnama()
// {
//     return "reyhan";
// }        

// panggilnama();
// $tes_data=panggilnama();
// =============================

// function calculateTip($pay,$tip=20)
// {
//   return $pay+($pay*$tip/100);
// }
// echo calculateTip(100);
// echo calculateTip(100,25);
// ===============================
// $nama="reyhan";
// function tes(&$data)
// {
//  echo $data="mas reyhan";
// }
// tes($nama);
// ============================
// $string_one = "you have teeth";
// $string_two = "toads are nice";
// $string_three = "brown is my favorite color";

// // Write your code below:
// $string_one = "you have teeth";
// $string_two = "toads are nice";
// $string_three = "brown is my favorite color";

// function convertToQuestion(& $str)
// {
//   $str="Do you think $str?\n";
// }
// convertToQuestion($string_one);
// convertToQuestion($string_two);
// convertToQuestion($string_three);
// echo $string_one;
// echo $string_two;
// echo $string_three;
// ==================================
echo PHP_EOL;
// digunakan untuk menyatakan ada atau tidak ada
// echo gettype("hello word");

// if(!isset($ngawur))
// {
//     echo "variabel tidak di temukan";
// }

// var_dump($ngawur);
// =================================
// echo strrev(".pu ti peeK .taerg gniod er'uoY");
// echo strtolower("SOON, tHiS WILL Look NoRmAL.");
// echo str_repeat("\nThere's no place like home.\n",3);
// =====================================
// untuk menampilkan angka random
// echo getrandmax();
// echo PHP_EOL;
// echo rand();
// echo PHP_EOL;
// echo rand(1,52);
// ============================
// $a = 29;
// $b = "You did it!";
// $c = STR_PAD_BOTH;
// $d = "*~*";

// echo str_pad($b,$a,$d,$c);
// echo PHP_EOL;
// echo str_pad($b,20,"&",$c);
// ====================================
function tanyaNama($nama)//($nama)=parameter//tanyaNama=function name
{
  return $nama;
}
tanyaNama("reyhan");//invoke//("reyhan")=argument
$reyhan=tanyaNama("reyhan");               //                      __________
                                          //                      | [-] [-] |
$miftah=function($nama){echo "$nama";};   //ANONYMUS FUNCTION     |    ^    |
$miftah("namamu adalah miftah");          //                      |_________|

