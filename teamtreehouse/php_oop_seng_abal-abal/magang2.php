<?php

// class cars

// {
//     public $color="red";
//     // private $number_machine="";

//     public function setnumbermachine($number)
//     {
//         $this->number_machine=$number;
//     }
//     public function getnumbermachine()
//     {
//         return $this->number_machine;
//     }
// }
// $toyota=new cars();

// $toyota->$color="green";

// echo $toyota->color;

// $toyota->setnumbermachine("gl1000");

// echo $toyota->getnumbermachine();

class cars
{   
    // properties

    public static $staticvar="static properties";

    public static function tester()
    {
        echo "funtion was invoked";
    }
    // method
}