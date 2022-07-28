<?php

// function
function nama($nama)
{
    echo $nama;
};
nama("\n kusuma");
// ==================
// class
class student
{
    // properties
    
    public $name;
    private $address;
 // ===================
    // method

    public function name()
    {
        echo "\n student name";
    }
 // =====================
 //  static method
    public static function names()
    {
        echo "\n static names";
    }
 // ==================   
 //  setters
    public function setaddress($address)
    {
        $this->address=$address;
    }
    // ================
    // getter
    public function getaddress()
    {
        return $this->address;
    }

    
}
// instantianted class
$student=new student();
// invoke method
$student->name();
// invoke static method
$student::names();
// invoke setter & getter
$student->setaddress("\n jl.gajah mada no.123,cipondoh,tangerang");

echo $student->getaddress().PHP_EOL;

