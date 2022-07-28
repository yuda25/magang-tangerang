<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=pkl","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);
} catch (Exception $error){
    echo $error->getMessage();
}

$toko=$db->query("select * from toko");

$data_toko=$toko->fetchAll();

?>