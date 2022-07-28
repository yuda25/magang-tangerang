<?php
// $score=55;
// if($score>=60)
// {
//     echo "you past the test";
// }elseif($score>=50 && $score<60)
// {
//     echo "try again";
// }else
// {
//     echo "you fail the test";
// }
// ==========================================

function nilai_ulangan($score)
{
    if($score>=95 && $score<101)
    {
        return "A\n";
    }elseif($score>=75 && $score<95)
    {
        return "B\n";
    }elseif($score>=65 && $score<75)
    {
        return "C\n";
    }else
    {
        echo "D\n";
    }
    
}
echo nilai_ulangan(98);
echo nilai_ulangan(78);
echo nilai_ulangan(68);
echo nilai_ulangan(58);
// not equal
var_dump((1<>2));
var_dump((1!==2));
// identical
var_dump((1==="1"));



// ========================
$num=1000;

 if($num>=10)
 {
     if($num<=1000)
     {
         echo "Your number is in range";
     }else
     {
         echo "Your number is grether then 1000";
     }
 }else
 {
     echo "Your number is not range";
 }
// ========================
echo PHP_EOL;

switch(date('1'))
{
    case "monday":
            echo "starting day";
    break;
    case "tuesday":
        echo "wash a car";
    break;
    case "wednesday":
        echo "holiday";
    break;
    case "thursday":
        echo "vacation";
    break;
    default:
    echo "long holiday";
}

