<?php

class magang{
    // properti
    public $siswa="kusuma yuda";
    // method
    public function tes()
    {
        return $this->siswa;
    }

    public function panggilnama()
    {
        echo $this->tes();
    }
}

$magang_top=new magang();

var_dump($magang_top->tes());

